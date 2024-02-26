<?php

namespace App\Http\Controllers;
use App\Models\Inscrito;
use Illuminate\Http\Request;

class listInscricoes extends Controller
{

    
    public function listInscrito(){
        return view('site.ListaInscricoes');
    }
    
    public function recuperaInscritos()
    {
        // Buscar todos os cursos
        $inscritos = Inscrito::all();

        return view('site.ListaInscricoes', compact('inscritos'));
    }


    public function atualizar(Request $request)
    {
        
    $dados = $request->all();

    
    $id = $dados['id'];

    
    $inscrito = Inscrito::find($id);

    
    if (!$inscrito) {
        return response()->json(['message' => 'Inscrito não encontrado'], 404);
    }

    // Atualize os campos necessários
    $inscrito->nome = $dados['nome'];
    $inscrito->email = $dados['email'];
    $inscrito->cpf = $dados['cpf'];
    $inscrito->endereco = $dados['endereco'];
    $inscrito->empresa = $dados['empresa'];
    $inscrito->telefone = $dados['telefone'];
    $inscrito->funcao = $dados['funcao'];
    $inscrito->curso = $dados['curso'];

    // Salve as alterações
    $inscrito->save();

    return redirect()->route('site.ListaInscricoes')->with('sucesso', 'Inscricao realizada com sucesso!');
    }


    public function excluir($id)
{
    // Encontrar e excluir o inscrito pelo ID
    $inscrito = Inscrito::find($id);

    if ($inscrito) {
        $inscrito->delete();
        return redirect()->route('site.ListaInscricoes')->with('success', 'Inscrito excluído com sucesso');
    } else {
        return redirect()->route('site.ListaInscricoes')->with('error', 'Inscrito não encontrado');
    }
}




}
