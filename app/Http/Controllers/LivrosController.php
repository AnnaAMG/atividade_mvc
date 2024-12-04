<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;

class LivrosController extends Controller
{
public function index()
{
    $livros = Livros::get();
       
    return view('livros.index', compact('livros'));
}



public function cadastro($id=null)
{
    $resultado = null;
    if($id){
        $resultado = Livros::find($id);
    }
        return view('livros.cadastro',compact('resultado'));
}


public function salvar(Request $request)
{
    if($request->id){
        $l = Livros::find($request->id);
    }else{
        $l = new Livros;
    }   
    $l->titulo = $request->titulo;
    
    $l->save();

   return redirect('/livros');


}

public function remover($id){

    $l = Livros::find($id);
    $l->delete();

    return redirect('/livros');
}




}

