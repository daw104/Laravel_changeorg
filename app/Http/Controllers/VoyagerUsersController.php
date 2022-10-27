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
        $id=1;
        $usuario = User::findOrFail($id);
        $peticiones = $usuario->firmas;
        return view('peticiones.index', compact('peticiones'));
    }




}
