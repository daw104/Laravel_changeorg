<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//ES SOLO PARA PAGINAS ESTATICAS
class PagesController extends Controller
{
    //Pagina de home
    public function home(){
        return view('pages.home') ;
    }

    // Pagina de socios
    public function socios(){
        return view('pages.socios') ;
    }

 

}
