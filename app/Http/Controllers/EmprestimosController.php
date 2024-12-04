<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimos;

class EmprestimosController extends Controller
{
public function index()
{
    $emprestimos = Emprestimos::get();
       
    return view('emprestimos.index', compact('emprestimos'));
}



public function cadastro($id=null)
{
    $resultado = null;
    if($id){
        $resultado = Emprestimos::find($id);
    }
        return view('emprestimos.cadastro',compact('resultado'));
}


public function salvar(Request $request)
{
    if($request->id){
        $e = Emprestimos::find($request->id);
    }else{
        $e = new Emprestimos;
    }   
    $e->data_emprestimo = $request->data_emprestimo;
    
    $e->save();

   return redirect('/emprestimos');


}

public function remover($id){

    $e = Emprestimos::find($id);
    $e->delete();

    return redirect('/emprestimos');
}




}
