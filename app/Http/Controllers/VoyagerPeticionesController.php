<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tenemos que importarlo
use App\Models\Peticione;

// class VoyagerPeticionesController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController;

// class VoyagerPeticionesController extends Controller
// {
//     //
// }


class VoyagerPeticionesController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    //

    public function index(Request $request){

        $peticiones = Peticione::all();
        return view('peticiones.index', compact('peticiones'));

}

}
