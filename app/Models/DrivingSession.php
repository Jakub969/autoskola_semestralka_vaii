<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingSession extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'instructor_id',
        'session_date',
        'duration',
        'location',
        'status'
    ];
}
