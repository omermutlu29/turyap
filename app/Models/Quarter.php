<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    protected $primaryKey = 'QUARTER_ID';
    protected $table='quarters';

    use HasFactory;
}
