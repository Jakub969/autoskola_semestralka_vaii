<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


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
        'car_id',
        'session_category'
    ];
    public function getStatusAttribute()
    {
        $now = Carbon::now('Europe/Bratislava');
        $sessionStart = Carbon::parse($this->session_date, 'Europe/Bratislava');
        $sessionEnd = Carbon::parse($this->session_date, 'Europe/Bratislava')->addMinutes($this->duration);


        if ($now->between($sessionStart, $sessionEnd)) {
            return 'prebiehajuca';
        } elseif ($now->greaterThan($sessionEnd)) {
            return 'ukončená';
        } else {
            return 'naplánovaná';
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
