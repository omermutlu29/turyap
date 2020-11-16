<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeedStatus extends Model
{
    protected $primaryKey = 'tapudurumu_id';

    protected $table='urun_deger_tapudurumu';
    use HasFactory;
}
