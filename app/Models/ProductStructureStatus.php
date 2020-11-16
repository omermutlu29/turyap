<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStructureStatus extends Model
{

    protected $table='urun_yapi_durumu';
    protected $primaryKey = 'yapi_durumu_id';

    use HasFactory;
}
