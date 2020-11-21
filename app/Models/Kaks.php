<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaks extends Model
{
    protected $primaryKey = 'KAKS_ID';

    protected $table='urun_deger_kaks';
    use HasFactory;
}
