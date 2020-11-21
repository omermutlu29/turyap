<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeatingType extends Model
{
    protected $primaryKey = 'ISITMA_ID';

    protected $table='urun_deger_isitma';
    use HasFactory;
}
