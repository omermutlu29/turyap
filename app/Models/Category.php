<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='urun_kategori';
    protected $primaryKey = 'KATEGORI_ID';

    use HasFactory;
}
