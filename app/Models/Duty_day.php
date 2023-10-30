<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duty_day extends Model
{ 
    use HasFactory;
    protected $table = "pharmacy_duty_days";
    protected $fillable = [
        'pharmacy_id',
        'day_id'   
    ];
   
}
