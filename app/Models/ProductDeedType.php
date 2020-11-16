<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDeedType extends Model
{
    protected $table='urun_deger_arsatapu';
    protected $primaryKey = 'arsatapu_id';

    use HasFactory;
}
