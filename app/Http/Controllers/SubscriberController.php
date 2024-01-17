<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:subscribers'
        ]);

        $subscriber = new Subscriber;
        $subscriber->email = $request->email;
        $subscriber->save();

        return back()->with('success', 'Úspešne ste sa prihlásili na odber!');
    }
}
