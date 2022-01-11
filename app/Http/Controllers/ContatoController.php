<?php

namespace App\Http\Controllers;
use \App\SiteContato;
use App\MotivoContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {

        /*
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        */

        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        // print_r($contato->getAttributes());
        $contato->save();
        */
        /*
    
        */
        // $contato->save();
        // print_r($contato->getAttributes());
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos'=>$motivo_contatos]);
    }

    public function salvar(Request $request){
        //SiteContato::create($request->all());
        $request->validate(
            [
                'nome'=>'required|min:3|max:40',
                'telefone'=>'required',
                'email'=>'required',
                'motivo_contato'=>'required',
                'mensagem'=>'required'
            ]
            );
     }
}
