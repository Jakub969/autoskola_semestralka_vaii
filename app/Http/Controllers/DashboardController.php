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
            $cars = DB::table('cars')
                ->where('type', $course_name)
                ->get();
        }
        else {
            $drivingSessions = collect();
            $cars = collect();
        }

        return view('/users/dashboard', ['drivingSessions' => $drivingSessions, 'cars' => $cars]);
    }

    public function updateSession(Request $request)
    {
        $session = DrivingSession::find($request->session_id);
        $session->car_id = $request->car_id;
        $session->student_id = Auth::user()->id;
        $session->save();

        return response()->json(['success' => true]);
    }

    public function signOut(Request $request)
    {
        $session = DrivingSession::find($request->session_id);
        $session->car_id = null;
        $session->student_id = null;
        $session->save();

        return response()->json(['success' => true]);
    }
}
