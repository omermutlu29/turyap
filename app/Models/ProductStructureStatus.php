<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStructureStatus extends Model
{

    protected $table='urun_yapi_durumu';
    protected $primaryKey = 'YAPI_DURUMU_ID';

    use HasFactory;
}
