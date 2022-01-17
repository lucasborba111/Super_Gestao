<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    //
    public function index(Request $request){
        $erro ='';
        if($request->get('erro') == 1) {
            $erro = 'Usuário ou senha não existem';
        }
        
        return view('site.login',['titulo'=>'login', 'erro'=>$erro]);
    }
    public function autenticar(Request $request){
        //regras de validação
        $regras = [
            'usuario'=>'email',
            'senha'=>'required'
        ];
        $feedback = [
            'usuario.email'=>'Email é obrigatorio',
            'senha.required'=>'Senha é obrigatorio'
        ];
        $request->validate($regras, $feedback);
        $password = $request->get('senha');
        $email = $request->get('usuario');

        $user = new User();
        $usuario = $user->where('email', $email)
        ->where('password', $password)
        ->get();

        if(isset($usuario->name)){
            echo 'Usuário existe';
        }
        else{
            return redirect()->route('site.login', ['erro'=>1]);
        }
    }

}
