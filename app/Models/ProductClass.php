<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClass extends Model
{

    protected $table='urun_sinif';
    protected $primaryKey = 'SINIF_ID';

    use HasFactory;
}
