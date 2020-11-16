<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='cities';
    protected $primaryKey = 'city_id';

    use HasFactory;


    public function __get($name)
    {
        if ($name == "city_id") {
            $name = "city_id";
        }

        if ($name == "country_id") {
            $name = "country_id";
        }

        return parent::__get($name);

    }


    public function country(){
        return $this->belongsTo(Country::class,'country_id','country_id');
    }

    public function towns(){
        return $this->belongsTo(Town::class,'city_id','city_id');
    }
}
