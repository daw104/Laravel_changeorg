<?php

namespace App\Http\Controllers;

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

    //Ver datella de una peticion
    public function show(Request $request, $id){
        $peticion = Peticione::findOrFail($id);
        return view('peticiones.show', compact('peticion'));
    }


}
