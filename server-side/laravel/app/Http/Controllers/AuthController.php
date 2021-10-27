<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Society;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $society = Society::where('id_card_number', $request->id_card_number)->where('password', $request->password)->first();

        if (!$society) return response()->json(['message' => 'ID Card Number or Password incorrect'], 401);

        return response()->json([
            'name' => $society->name,
            'born_date' => $society->born_date,
            'gender' => $society->gender,
            'address' => $society->address,
            'token' => md5($society->id_card_number),
            'regional' => $society->regional
        ]);
    }

    public function logout(Request $request)
    {
        $societies = Society::all();

        foreach ($societies as $society) {
            if (md5($society->id_card_number) == $request->token) return response()->json([
                "message" => "Logout success"
            ]);
        }

        return response()->json([
            "message" => "Invalid token",
        ]);
    }
}
