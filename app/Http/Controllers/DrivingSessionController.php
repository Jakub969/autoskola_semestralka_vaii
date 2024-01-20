<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DrivingSession;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DrivingSessionController extends Controller
{
    public function store(Request $request)
    {
        $drivingSession = new DrivingSession;

        $drivingSession->instructor_id = Auth::id();
        $drivingSession->student_id = null;
        $request->validate([
            'session_date' => 'required|date',
        ]);
        $session_date = str_replace('T', ' ', $request->input('session_date'));
        $drivingSession->session_date = $session_date;
        $drivingSession->duration = $request->duration;
        $drivingSession->location = $request->location;
        $drivingSession->status = 'naplánovaná';
        $drivingSession->car_id = null;
        $drivingSession->session_category = $request->session_category;

        $drivingSession->save();

        return redirect()->route('driving-sessions');
    }


    public function show()
    {
        return redirect()->route('driving-sessions');
    }

}
