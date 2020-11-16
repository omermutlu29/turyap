<?php

namespace App\Models;

use App\RelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use RelationshipsTrait;
    protected $primaryKey = 'user_id';

    protected $table='kullanicilar';
    use HasFactory;

    public function agency(){
        return $this->belongsTo(Agency::class,'sirket_id','sirket_id');
    }

    public function products(){
        return $this->hasMany(Product::class,'user_id','user_id');
    }
}
