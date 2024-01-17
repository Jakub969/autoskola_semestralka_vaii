<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $price = $request->input('price');
        $course = $request->input('course');

        session(['price' => $price]);
        session(['course' => $course]);

        return view('checkout', ['price' => $price, 'course' => $course]);
    }

}
