<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildYear extends Model
{
    protected $table='urun_deger_binayasi';
    protected $primaryKey = 'binayasi_ids';

    use HasFactory;
}
