<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductField extends Model
{

    protected $table='urun_alanlar';
    protected $primaryKey = 'id';

    use HasFactory;
}
