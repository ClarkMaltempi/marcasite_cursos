<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;

class usuarios extends Controller
{
    public function users(Request $request){
 
        //$usuario->save();
        return view('site.cadastroUser');
    }

    public function salvar(Request $request){

     // Definindo as regras de validação
     $regras = [
        'nome' => 'required|min:3|max:40',
        'email' => 'required|email|unique:usuarios,email',
        'typeUser' => 'required',
        'password' => 'required|min:6|confirmed', // Confirmed valida a confirmação do campo de senha
        
    ];

    // Definindo mensagens de erro personalizadas
    $mensagens = [
        'nome.required' => 'Campo nome preenchido incorretamente',
        'password.confirmed' => 'A senha nao coincide.',
        'email.unique' => 'Este e-mail já foi registrado.',
        'telefone.numeric' => 'O campo telefone deve ser um número.'
    ];

    // Validando os dados do formulário
    $validator = Validator::make($request->all(), $regras, $mensagens);

    // Se a validação falhar, redirecione com os erros
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Se a validação passar, criar e salvar o usuário
    $usuario = new Usuario();
    $usuario->nome = $request->input('nome');
    $usuario->email = $request->input('email');
    $usuario->tipo_usuario = $request->input('typeUser');
    $usuario->senha = bcrypt($request->input('new_password'));
    $usuario->telefone = $request->input('telefone');

    $usuario->save();
    
    //print_r($usuario->getAttributes());

    // Redirecionar ou fazer após o salvamento bem-sucedido
    return redirect()->route('site.cadastroUser');

    }

}
