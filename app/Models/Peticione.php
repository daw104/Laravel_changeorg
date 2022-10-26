<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticione extends Model
{
    use HasFactory;

    //relacion con una peticion
    public function firmas(){
        return $this->belongsToMany(User::class,'peticione_user');
    }

    //relacion con usuario
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion con categorias
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'titulo',
        'descripcion',
        'destinatario',
        'image',

    ];



}
