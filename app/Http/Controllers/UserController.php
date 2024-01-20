<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('users.update-users', compact('users'));
    }

    public function updateRoles(Request $request)
    {
        $users = $request->input('users');

        foreach ($users as $userId => $role) {
            $user = User::find($userId);
            $user->role = $role;
            $user->save();
        }
        return response()->json(['success' => 'Role používateľov boli úspešne aktualizované']);
    }
}
