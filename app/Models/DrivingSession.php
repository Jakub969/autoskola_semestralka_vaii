<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Model;


/**
 * @mixin Eloquent
 * */
class DrivingSession extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'instructor_id',
        'session_date',
        'duration',
        'location',
        'status',
        'car_id'
    ];
}
