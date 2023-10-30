<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckNumberController extends Controller
{
    public function CheckNumber(Request $request){
            $number = $request->input('number');
            $exists = DB::table('Syndicates')->where('id', $number)->exists();
            if ($exists) {
                return view('auth.register');
            } else {
                echo "<script>alert('Sorry, you are not a member of the Pharmacists Syndicate.')</script>";
                return view('welcome');
            }


    }
}
