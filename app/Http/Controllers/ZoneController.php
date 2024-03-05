<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function storeAjax(Request $request)
    {

        $data = new Zone;
        $data->name = $request->name;
        $data->tariff = $request->tariff;
        $data->nbr_seats = $request->nbr_seats;
        $data->save();
        return response()->json([
            'message'=>'zone added',
            'zone' => $data
        ]);
    }

}
