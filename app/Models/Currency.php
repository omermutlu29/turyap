<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $primaryKey = 'PARA_BIRIMI_ID';

    protected $table='para_birimi';
    use HasFactory;


}
