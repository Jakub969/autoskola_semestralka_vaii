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

        $drivingSession->instructor_id = $request->instructor_id;
        $drivingSession->student_id = $request->student_id;
        $drivingSession->session_date = $request->session_date;
        $drivingSession->duration = $request->duration;
        $drivingSession->location = $request->location;
        $drivingSession->status = $request->status;
        $drivingSession->car_id = $request->car_id;

        $drivingSession->save();

        return redirect()->route('driving-sessions');

    }

    public function show()
    {
        return redirect()->route('driving-sessions');
    }
}
