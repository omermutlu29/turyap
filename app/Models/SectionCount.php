<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionCount extends Model
{
    protected $primaryKey = 'bolumsayisi_id';


    protected $table='urun_deger_bolumsayisi';
    use HasFactory;
}
