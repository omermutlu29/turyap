<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUsageStatus extends Model
{

    protected $table='urun_kullanim_durumu';
    protected $primaryKey = 'kullanim_durumu_id';

    use HasFactory;
}
