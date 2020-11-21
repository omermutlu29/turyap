<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUsageStatus extends Model
{

    protected $table='urun_kullanim_durumu';
    protected $primaryKey = 'KULLANIM_DURUMU_ID';

    use HasFactory;
}
