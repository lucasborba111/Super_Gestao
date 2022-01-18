<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }
    public function listar(){
        return view('app.fornecedor.listar');
    }
    public function adicionar(Request $request){
        
        if($request->input('_token')!=''){
            $regras = [
                'nome'=>'required|min:3|max:40',
                'site'=>'required',
                'uf'=>'required|min:2|max:2',
                'email'=>'email',
            ];
            $feedback = [
                'required'=>'O campo :atribute deve ser preenchido',
                'nome.min'=>'O campo deve ter no mínimo 3 caracteres',
                'nome.max'=>'O campo deve ter no máximo 40 caracteres',
                'uf.min'=>'O  campo uf deve ter no mínimo 2 caracteres',
                'uf.max'=>'O  campo uf deve ter no máximo 2 caracteres',
                'email.email'=>'O campo email não foi preenchido corretamente!'
            ];
            $request->validate($regras,$feedback);
        }

        return view('app.fornecedor.adicionar');
    }
}
