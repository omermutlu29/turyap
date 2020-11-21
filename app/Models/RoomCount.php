<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCount extends Model
{
    protected $primaryKey = 'ODASAYISI_ID';

    protected $table='urun_deger_odasayisi';
    use HasFactory;
}
