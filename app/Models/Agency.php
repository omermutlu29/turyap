<?php

namespace App\Models;

use App\RelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class Agency extends Model
{
    use RelationshipsTrait;
    protected $primaryKey = 'SIRKET_ID';

    protected $table='firmalar';
    use HasFactory;

    public function agents(){
        return $this->hasMany(Agent::class,'SIRKET_ID','SIRKET_ID');
    }

    public function products(){
        return $this->hasMany(Product::class,'SIRKET_ID','SIRKET_ID');
    }

    public function city(){
        return $this->belongsTo(City::class,'İL_ID','cityID');
    }
    public function country(){
        return $this->belongsTo(Country::class,'ULKE_ID','countryID');
    }

    public function town(){
        return $this->belongsTo(Town::class,'ILCE_ID','townID');
    }
}
