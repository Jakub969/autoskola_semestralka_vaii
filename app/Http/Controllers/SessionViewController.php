<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DrivingSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionViewController extends Controller
{
    public function showSessions()
    {
        $instructor_id = Auth::id();
        $sessions = DrivingSession::with('user', 'car')
            ->where('instructor_id', $instructor_id)
            ->whereNotNull('student_id')
            ->get();

        return view('/users/session-view', ['sessions' => $sessions]);
    }

}
