<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\Syndicate;
use Illuminate\Support\Facades\Mail;
use App\Mail\Pharmacists_SyndicateMail;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'pharmacist_number' => ['required'],
           
           
        ]);

        $pharmacistNumber = $request->input('pharmacist_number');

        // التحقق من أن الرقم المدخل لم يتم استخدامه من قبل
        if (User::where('pharmacist_number', $pharmacistNumber)->exists()) {
            return back()->withErrors(['pharmacist_number' => 'This number is already used.'])->withInput();
        }

        // التحقق من أن الرقم ينتمي لنقابة الصيادلة
        $exists = DB::table('Syndicates')->where('board_number', $pharmacistNumber)->exists();
        if (!$exists) {
            return back()->withErrors(['pharmacist_number' => 'Sorry, you are not a member of the Pharmacists Syndicate.'])->withInput();
        }
       
        // إنشاء المستخدم وتخزين البيانات في قاعدة البيانات
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'pharmacist_number' => $request->pharmacist_number,
    
                   
        ]);

        $user->pharmacy()->create([]);
      
        // إرسال رسالة بريد إلكتروني للمستخدم بعد التسجيل
        Mail::to($request->email)->send(new Pharmacists_SyndicateMail());

        // إرسال حدث "Registered" لتسجيل دخول المستخدم الجديد
        event(new Registered($user));

        // تسجيل دخول المستخدم الجديد
        Auth::login($user);

        // إعادة توجيه المستخدم إلى الصفحة الرئيسية بعد التسجيل
        return redirect(RouteServiceProvider::HOME);
    }
}
