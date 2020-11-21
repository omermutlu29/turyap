<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypeContent extends Model
{
    protected $table='urun_cinsi_tipi';
    protected $primaryKey = 'TIP_ID';

    use HasFactory;

    public function product_type(){
        return $this->belongsTo(ProductType::class,'CINSI_ID','CINSI_ID');
    }
}
