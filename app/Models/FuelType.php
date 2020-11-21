<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    protected $primaryKey = 'YAKITIPI_ID';

    protected $table='urun_deger_yakittipi';
    use HasFactory;
}
