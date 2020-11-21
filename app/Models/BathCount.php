<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BathCount extends Model
{
    protected $table='urun_deger_banyosayisi';
    protected $primaryKey = 'BANYOSAYISI_ID';

    use HasFactory;
}
