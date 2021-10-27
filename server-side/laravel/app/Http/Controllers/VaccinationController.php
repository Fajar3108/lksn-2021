<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APp\Models\Society;
use App\Models\Vaccination;
use Illuminate\Support\Facades\Validator;

class VaccinationController extends Controller
{
    public function index(Request $request)
    {

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'spot_id' => ['required'],
            'date' => ['required', 'date_format:Y-m-d'],
        ]);

        if ($validator->fails()) return response()->json([
            'message' => 'Invalid field',
            'errors' => $validator->errors(),
        ], 401);

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

        $my_vaccinations = Vaccination::where('society_id', $society->id)->get();

        if (count($my_vaccinations) > 2) return response()->json([
            'message' => 'Society has been 2x vaccinated',
        ], 401);

        if (count($my_vaccinations) == 1 && $my_vaccinations->first()->date < now()->addDays(30)->format('Y-m-d')) {
            return response()->json([
                'message' => 'Wait at least +30 days from 1st Vaccination'
            ], 401);
        }

        Vaccination::create([
            'society_id' => $society->id,
            'spot_id' => $request->spot_id,
            'date' => $request->date
        ]);

        return response()->json([
            'message' =>  (count($my_vaccinations) == 1 ? "First" : "Second") . " vaccination registered successful"
        ]);
    }
}
