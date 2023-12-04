<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CalificacionController extends Controller
{
    // considerar la creación de un admin para la gestión

    public function calificar(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'puntuacion' => 'required',
            'ventanilla_id' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['code' => 'error', 'error' => $validation->errors()]);
        }

        Calificacion::create([
            'puntuacion' => $request->puntuacion,
            'ventanilla_id' => $request->ventanilla_id,
        ]);

        return response()->json(['code'=>'ok','msg'=>'Gracias por tu calificación.']);
    }
}
