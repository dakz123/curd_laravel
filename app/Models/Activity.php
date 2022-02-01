<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Activity as Authenticatable;

class Activity extends Model
{
    use HasFactory;
    protected $table='activities';
    protected $fillable = [
        'activity',
        
        'user_id',
    ];
}
