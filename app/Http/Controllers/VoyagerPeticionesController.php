<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $peticiones = Peticione::paginate(3);
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



    //Para ver el formulario de crear una peticion
    public function create(Request $request){
        $categorias = Category::all();
        return view('peticiones.create', compact('categorias'));
    }



    //Guardar una peticion
    public function store(Request $request){

        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'destinatario' => 'required',
            'image' => 'required',
        ]);
        $input = $request->all();
        if ($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $file->move('storage/peticiones/October2022', $name);
            $input['image'] = $name;
        }
        $category = Category::findOrFail($input['category']);
        $user = 2; //asociarlo al usuario authenticado
        $peticion = new Peticione($input);
        $peticion->user()->associate($user);
        $peticion->category()->associate($category);
        $peticion->firmantes = 0;
        $peticion->estado = 'pendiente';
        $peticion->image="peticiones/October2022".$input['image'];
        $peticion->save();
        return redirect('/peticiones');
    }


    //Cambiar estado de peticion
    public function cambiarEstado(Request $request, $id){
        $peticion = Peticione::findOrFail($id);
        $peticion->estado = 'aceptada';
        $peticion->save();
        return redirect('/peticiones');
    }



}
