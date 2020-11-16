<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table='urun_cinsi';
    protected $primaryKey = 'cinsi_id';

    use HasFactory;

    public function product_type_contents(){
        return $this->hasMany(ProductTypeContent::class,'cinsi_id','cinsi_id');
    }

    public function products(){
        return $this->hasMany(Product::class,'cinsi_id','cinsi_id');
    }
}
