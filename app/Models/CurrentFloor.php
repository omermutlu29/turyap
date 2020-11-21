<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentFloor extends Model
{
    protected $primaryKey = 'BULUNDUKAT_ID';

    protected $table='urun_deger_bulundukat';
    use HasFactory;
}
