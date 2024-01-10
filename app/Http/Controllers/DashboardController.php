<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\DrivingSession;
use DB;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();
        $payment = Payment::where('email', $user->email)->first();

        if ($payment) {
            $drivingSessions = DB::table('driving_sessions')
                ->join('cars', 'driving_sessions.car_id', '=', 'cars.id')
                ->where('driving_sessions.student_id', $payment->user_id)
                ->select('driving_sessions.*', 'cars.make', 'cars.model', 'cars.type')
                ->get();
        } else {
            $drivingSessions = collect();
        }

        return view('dashboard', ['drivingSessions' => $drivingSessions]);
    }
}
