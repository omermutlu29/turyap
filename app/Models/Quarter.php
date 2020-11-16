<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    protected $primaryKey = 'quarter_id';
    protected $table='quarters';

    use HasFactory;
}
