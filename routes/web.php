<?php

use App\Models\Day;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\Duty_Day_Controller;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\CheckNumberController;

Route::get('/', function () {
    return view('welcome', [
        
        'pharmacies' => \App\Models\Pharmacy::whereHas('days', function($q)
        {$q->where('day',Date('D'));
       })->get()
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/send', [MailController::class, 'index']);

Route::get('/home', function () {
    return view('Home');
})->name('Home');

Route::get('/about', function () {
    return view('About');
})->name('About');

Route::get('/help', function () {
    return view('Help');
})->name('Help');

Route::get('/map', function () {
    return view('pharmacyMap');
})->name('map');

Route::Post('/pharmacyInformation', [PharmacyController::class, 'update'])->name('pharmacyInformation');

Route::get('/pharmacyInfo', function () {
    return view('pharmacyInfo', [
        'pharmacy' => \Illuminate\Support\Facades\Auth::user()->pharmacy
    ]);
})->middleware('auth')->name('pharmacyInfo');

Route::get('/EditLocation', function () {
    return view('EditLocation');
})->name('EditLocation');

require __DIR__ . '/auth.php';
