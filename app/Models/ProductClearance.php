<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClearance extends Model
{
    protected $table='urun_deger_gabari';
    protected $primaryKey = 'gabari_id';

    use HasFactory;
}
