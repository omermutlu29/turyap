<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table='urun_cinsi';
    protected $primaryKey = 'CINSI_ID';

    use HasFactory;

    public function product_type_contents(){
        return $this->hasMany(ProductTypeContent::class,'CINSI_ID','CINSI_ID');
    }

    public function products(){
        return $this->hasMany(Product::class,'CINSI_ID','CINSI_ID');
    }
}
