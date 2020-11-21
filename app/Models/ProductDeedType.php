<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDeedType extends Model
{
    protected $table='urun_deger_arsatapu';
    protected $primaryKey = 'ARSATAPU_ID';

    use HasFactory;
}
