<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Peticione;
use Illuminate\Http\Request;

class VoyagerUsersController extends Controller
{
    //
    public function peticionesFirmadas(Request $request){
        //$id = Auth::id();
        $id=2;
        $usuario = User::findOrFail($id);
       // $peticiones = $usuario->firmas;
        $peticiones= Peticione::where('estado','=', 'aceptada')->get();

        return view('peticiones.index', compact('peticiones',));
    }




}
