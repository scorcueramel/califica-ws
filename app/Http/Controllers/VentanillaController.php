<?php

namespace App\Http\Controllers;

use App\Models\Ventanilla;
use Illuminate\Http\Request;

class VentanillaController extends Controller
{
    public function carga_ventanillas(){
        // Cuando se cree el administrador, considerar si la ventanilla esta en false se carga en la lista de selección de ventanilla de lo contrario no la carga
        $ventanillas = Ventanilla::all();
        return response()->json(['code'=>'ok','ventanillas'=>$ventanillas]);
    }

    public function seleccion_ventanilla(string $id){
        $ventanilla = Ventanilla::find($id);
        if(is_null($ventanilla)){
            return response()->json(['code'=>'error','msg'=>'No se encontro la ventanilla.']);
        }
        return response()->json(['code'=>'ok','resp'=>$ventanilla]);
    }
}
