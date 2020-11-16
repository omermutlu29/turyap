<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaks extends Model
{
    protected $primaryKey = 'kaks_id';

    protected $table='urun_deger_kaks';
    use HasFactory;
}
