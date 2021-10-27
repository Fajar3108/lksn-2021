<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Society;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        $societies = Society::all();
        $society = '';

        foreach ($societies as $item) {
            if (md5($item->id_card_number) == $request->token) {
                $society = $item;
                break;
            }
        }

        if (!$society) return response()->json([
            'message' => 'Unauthorized user',
        ], 401);


        Consultation::create([
            'current_symptoms' => $request->current_symptoms,
        ]);

        return response()->json([
            'message' => 'Request consultation sent successful',
        ]);
    }

    public function show(Request $request)
    {
        $societies = Society::all();
        $society = '';
        foreach ($societies as $item) {
            if (md5($item->id_card_number) == $request->token) {
                $society = $item;
                break;
            }
        }

        if (!$society) return response()->json([
            'message' => 'Unauthorized user',
        ], 401);

        return response()->json([
            'consultation' => $society->consultation,
        ]);
    }
}
