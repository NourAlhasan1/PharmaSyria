<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PharmacyController extends Controller
{
    public function store(Request $request)
    {

            $name=$request->input('name');
            $phone=$request->input('phone');
            $city=$request->input('city');
            $area=$request->input('area');
            $latitude=$request->input('latitude');
            $longitude=$request->input('longitude');


          $user=Pharmacy::create([
                'Pharmacy_name'=> $name,
                'Pharmacy_number'=>$phone,
                'City'=>$city,
                'Area'=>$area,
                'latitude'=>$latitude,
                'longitude'=>$longitude,
            ]);
            $user->save();

    }


    public function update(Request $request)
    {

        $name=$request->input('name');
        $phone=$request->input('phone');
        $city=$request->input('city');
        $area=$request->input('area');
        $latitude=$request->input('latitude');
        $longitude=$request->input('longitude');


        $pharmacy= Auth::user()->pharmacy()->update([
            'Pharmacy_name'=> $name,
            'Pharmacy_number'=>$phone,
            'City'=>$city,
            'Area'=>$area,
            'latitude'=>$latitude,
            'longitude'=>$longitude,
        ]);

        return back()->with('pharmacy', $pharmacy);
    }
}
