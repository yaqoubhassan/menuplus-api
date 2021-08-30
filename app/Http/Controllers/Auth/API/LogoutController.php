<?php

namespace App\Http\Controllers\Auth\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return response()->json([
                'message' => 'User not logged in'
            ]);
        }
        $user->currentAccessToken()->delete();

        return response()->json([
            'data' => [
                'message' => 'Successfully logged out'
            ]
        ]);
    }
}
