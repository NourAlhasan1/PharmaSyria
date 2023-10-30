<?php

namespace App\Models;
use App\Models\Pharmacy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Day extends Model
{
    use HasFactory;
    protected $table = "days";
    protected $fillable = [
       'day'
    ];


    public function pharmacies(){

        return $this-> belongsToMany(Pharmacy::class,'pharmacy_duty_days','day_id','pharmacy_id');
        
    }
}
