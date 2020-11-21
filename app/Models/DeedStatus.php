<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeedStatus extends Model
{
    protected $primaryKey = 'TAPUDURUMU_ID';

    protected $table='urun_deger_tapudurumu';
    use HasFactory;
}
