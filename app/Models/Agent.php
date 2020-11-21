<?php

namespace App\Models;

use App\RelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use RelationshipsTrait;
    protected $primaryKey = 'USER_ID';

    protected $table='kullanicilar';
    use HasFactory;

    public function agency(){
        return $this->belongsTo(Agency::class,'SIRKET_ID','SIRKET_ID');
    }

    public function products(){
        return $this->hasMany(Product::class,'USER_ID','USER_ID');
    }
}
