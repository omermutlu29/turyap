<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $fillable=['name','address','home_phone','gsm','email','education','job','city_turkey','city_germany','office_address'];
    use HasFactory;
}
