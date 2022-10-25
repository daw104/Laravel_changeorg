<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//tenemos que importarlo
use App\Models\Peticione;
use Illuminate\Support\Str;

// class VoyagerPeticionesController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController;

// class VoyagerPeticionesController extends Controller
// {
//     //
// }


class VoyagerPeticionesController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{


    // Ver todas las peticiones
    public function index(Request $request){
        $peticiones = Peticione::all();
        return view('peticiones.index', compact('peticiones'));
    }

    //List Mine action
    public function peticionesUser(Request $request){
        $user_id = 2;
        $userName = User::find($user_id)->name;
        $peticionesUser = Peticione::where('user_id',  $user_id)->get();

        return view('peticiones.peticionesUser', compact('peticionesUser','userName'));
    }


    //Ver datella de una peticion
    public function show(Request $request, $id){

        $peticion = Peticione::findOrFail($id);
        return view('peticiones.show', compact('peticion'));
    }

    public function firmar(Request $request, $id){
        $peticion = Peticione::findOrFail($id);
        //$user = Auth::user();
        $user = 2;
        $user_id = [$user];
        //$user_id = [$user->id];
        $peticion->firmas()->attach($user_id);
        return redirect('/peticiones');
    }



    public function create(Request $request){
        return view('peticiones.create');

    }


}
