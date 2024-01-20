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
            $course_name = preg_replace('/\s*\([^)]*\)/', '', $payment->course_name);
            $drivingSessions = DB::table('driving_sessions')
                ->where('session_category', $course_name)
                ->get();
        }
        else {
            $drivingSessions = collect();
        }

        return view('/users/dashboard', ['drivingSessions' => $drivingSessions]);
    }


}
