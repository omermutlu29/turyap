<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloorCount extends Model
{
    protected $primaryKey = 'katsayisi_id';

    protected $table='urun_deger_binakatsayisi';
    use HasFactory;
}
