<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\DrivingSession;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();
        $payment = Payment::where('email', $user->email)->first();

        if ($payment) {
            $drivingSessions = DrivingSession::where('user_id', $payment->user_id)->get();
        } else {
            $drivingSessions = collect();
        }

        return view('dashboard', ['drivingSessions' => $drivingSessions]);
    }
}
