<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        
        return view('app.fornecedor.index');
    }
    public function listar(Request $request){
        
        $fornecedor = Fornecedor::where('nome','like', '%'.$request->input('nome').'%')->get();
        return view('app.fornecedor.listar', compact('fornecedor'));
    }
    public function adicionar(Request $request){
        $msg = '';
        if($request->input('_token')!='' && $request->input('id')==''){
            $regras = [
                'nome'=>'required|min:3|max:40',
                'site'=>'required',
                'uf'=>'required|min:2|max:2',
                'email'=>'email',
            ];
            $feedback = [
                'required'=>'O campo :attribute deve ser preenchido',
                'nome.min'=>'O campo deve ter no mínimo 3 caracteres',
                'nome.max'=>'O campo deve ter no máximo 40 caracteres',
                'uf.min'=>'O  campo uf deve ter no mínimo 2 caracteres',
                'uf.max'=>'O  campo uf deve ter no máximo 2 caracteres',
                'email.email'=>'O campo email não foi preenchido corretamente!'
            ];
            $request->validate($regras,$feedback);
            $fornecedor = new Fornecedor;
            $fornecedor->create($request->all());
            return view('app.fornecedor.adicionar');

        }

        if($request->input('id')!='' && $request->input('_token')!=''){
            $id=$request->input('id');
            $fornecedor = Fornecedor::find($id); 
            $fornecedor->update($request->all());
            return view('app.fornecedor.adicionar');
        }
        return view('app.fornecedor.adicionar');

    }

    public function editar($id){        
        $fornecedor = Fornecedor::find($id);
        
        return view('app.fornecedor.adicionar', ['fornecedor'=>$fornecedor]);
    }

    public function excluir($id){
        $fornecedor = Fornecedor::find($id)->delete();
        return redirect()->route('app.fornecedor');
    }
}
