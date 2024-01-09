<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMaintenance extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'maintenance_date',
        'maintenance_type',
        'details',
    ];
}
