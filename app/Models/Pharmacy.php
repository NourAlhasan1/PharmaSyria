<?php

namespace App\Models;

use App\Models\day;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    protected $table = "pharmacies";
    protected $fillable = [
        'Pharmacy_name',
        'Pharmacy_number',
        'Area',
        'City',
        'latitude',
        'longitude',
    ];


    public function days()
    {
        return $this->belongsToMany(day::class, 'pharmacy_duty_days', 'pharmacy_id', 'day_id');

    }
}
