<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Post
 *
 * @mixin Eloquent
 */
class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'total_amount',
        'first_name',
        'last_name',
        'email',
        'address',
        'address2',
        'payment_method'
    ];
}
