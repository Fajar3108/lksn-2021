<?php

namespace App\Http\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->only('username', 'password'), [
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 400);
        }

        if ($token = JWTAuth::attempt($request->only('username', 'password'))) {
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'expires_in' => '24 Hourse'
            ]);
        }
        return response()->json([
            'error' => 'Unauthorized'
        ]);
    }

    public function logout(Request $request)
    {
        $validator = Validator::make($request->only('token'), [
            'token' => ['required'],
        ]);

        if ($validator->fails()) return response()->json([
            'message' => 'Unauthorized',
        ], 401);

        JWTAuth::invalidate($request->token);

        return response()->json([
            'message' => 'successfully logged out'
        ]);
    }
}
