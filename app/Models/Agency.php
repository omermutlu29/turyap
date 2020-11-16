<?php

namespace App\Models;

use App\RelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class Agency extends Model
{
    use RelationshipsTrait;
    protected $primaryKey = 'sirket_id';

    protected $table='firmalar';
    use HasFactory;

    public function agents(){
        return $this->hasMany(Agent::class,'sirket_id','sirket_id');
    }

    public function products(){
        return $this->hasMany(Product::class,'sirket_id','sirket_id');
    }

    public function city(){
        return $this->belongsTo(City::class,'il_id','city_id');
    }
    public function country(){
        return $this->belongsTo(Country::class,'ulke_id','country_id');
    }

    public function town(){
        return $this->belongsTo(Town::class,'ilce_id','town_id');
    }
}
