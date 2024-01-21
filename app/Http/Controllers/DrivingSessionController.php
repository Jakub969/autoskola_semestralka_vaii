<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DrivingSession;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
        $userId = Auth::id();
        $drivingSessions = DrivingSession::where('instructor_id', $userId)->get();
        return view('/users/driving-sessions', ['drivingSessions' => $drivingSessions]);
    }

    public function destroy(DrivingSession $session_id)
    {
        $session_id->delete();
        return Redirect::to('/users/driving-sessions');
    }

    public function update(Request $request, DrivingSession $session)
    {
        $validatedData = $request->validate([
            'duration' => 'required',
            'location' => 'required',
            'session_category' => 'required',
        ]);
        $session->update($validatedData);
        return response()->json(['success' => 'Termín bol úspešne aktualizovaný']);
    }
}
