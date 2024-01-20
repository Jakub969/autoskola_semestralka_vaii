<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Eloquent
 * */
class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_brand',
        'model',
        'year',
        'license_plate',
        'type'
    ];
}
