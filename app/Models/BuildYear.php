<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildYear extends Model
{
    protected $table='urun_deger_binayasi';
    protected $primaryKey = 'BINAYASI_ID';

    use HasFactory;
}
