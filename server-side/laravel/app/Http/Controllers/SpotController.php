<?php

namespace App\Http\Controllers;

use App\Http\Resources\SpotResource;
use App\Models\Society;
use App\Models\Spot;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function index(Request $request)
    {
        foreach (Society::all() as $society) {
            if (md5($society->id_card_number) == $request->token) {
                return response()->json([
                    'spots' => new SpotResource($society->consultation()->spots),
                ]);
            }
        }

        return response()->json([
            'message' => 'Unauthorized user',
        ], 401);
    }

    public function show($spot_id, Request $request)
    {
        $date = $request->date ?? now();

        // $spot = Spot::where()
    }
}
