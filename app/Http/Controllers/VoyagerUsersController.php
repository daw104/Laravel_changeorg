<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Peticione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoyagerUsersController extends Controller
{
    //
    public function peticionesFirmadas(Request $request){
        $id = Auth::id();
        $usuario = User::findOrFail($id);
        $userName = $usuario->name;
        $peticiones = $usuario->firmas()->paginate(3);

        //$peticiones= Peticione::where('estado','=', 'aceptada')->get();
        /*echo "<br>";
        var_dump($peticiones);
        echo "<br>";
        exit();*/
        return view('peticiones.index', compact('peticiones', 'userName'));
    }




}
