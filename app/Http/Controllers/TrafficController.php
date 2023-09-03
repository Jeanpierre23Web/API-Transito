<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrafficController extends Controller
{
      public function getTrafficInfo()
    {
        // Puedes reemplazar esto con datos reales de tráfico
        $trafficData = [
            'city' => 'Ejemplo City',
            'status' => 'Congestionado',
            'message' => 'Tráfico pesado en la autopista principal.',
        ];

        return response()->json($trafficData);
    }
}