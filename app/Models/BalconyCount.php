<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalconyCount extends Model
{
    protected $table='urun_deger_balkonsayisi';
    protected $primaryKey = 'balkonsayisi_id';

    use HasFactory;
}
