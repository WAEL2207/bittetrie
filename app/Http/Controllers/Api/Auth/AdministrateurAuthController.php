<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdministrateurAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('client')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            return response()->json([
                'message' => 'Login successful',
                'token' => Auth::guard('client')->user()->createToken('YourApp')->plainTextToken
            ]);
        }

        throw ValidationException::withMessages([
            'email' => ['These credentials do not match our records.'],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
