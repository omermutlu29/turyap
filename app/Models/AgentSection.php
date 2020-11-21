<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentSection extends Model
{
    protected $table='user_bolum';
    protected $primaryKey = 'USER_BOLUM_ID';

    use HasFactory;
}
