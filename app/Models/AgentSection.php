<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentSection extends Model
{
    protected $table='user_bolum';
    protected $primaryKey = 'user_bolum_id';

    use HasFactory;
}
