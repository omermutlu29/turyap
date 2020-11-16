<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table='urun_resim';
    protected $primaryKey = 'urun_id';

    use HasFactory;
}
