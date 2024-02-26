<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use App\Models\Inscrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class inscricoes extends Controller
{
    public function inscricaoAluno(){
        return view('site.inscricoes');
    }

    public function recuperaCursos(){
        $cursos = Curso::all();
        return view('site.inscricoes', compact('cursos'));
    }

    public function inscricoes(Request $request){

        $regras = [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cpf' => 'required|string|max:14', // Adapte conforme necessário
            'endereco' => 'required|string|max:255',
            'empresa' => 'nullable|string|max:255',
            'telefone' => 'required|string|max:20', // Adapte conforme necessário
            'funcao' => 'nullable|string|max:255',
            'curso' => 'required|string|max:255',
            'senha' => 'required|string|min:6|confirmed', 
        ];
        
        $mensagens = [
            'required' => 'O campo :attribute é obrigatório.',
            'string' => 'O campo :attribute deve ser uma string.',
            'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
            'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
            'min' => 'O campo :attribute deve ter pelo menos :min caracteres.',
            'confirmed' => 'A confirmação do campo :attribute não coincide.',
        ];

         // Validando os dados do formulário
         $validator = Validator::make($request->all(), $regras, $mensagens);
        
         // Se a validação falhar, redirecione com os erros
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $curso_id = $request->input('curso');

        // Busca o curso no banco de dados
        $curso = Curso::findOrFail($curso_id);

        $inscricao = new Inscrito([
            'curso_id' => $request->input('curso'),
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'endereco' => $request->input('endereco'),
            'empresa' => $request->input('empresa'),
            'telefone' => $request->input('telefone'),
            'funcao' => $request->input('funcao'),
            'curso' => $curso->nome_curso, // Adiciona o nome do curso
            'senha' => bcrypt($request->input('senha')), // Recomendado para armazenar senhas de forma segura
        ]);
    
       
        $inscricao->save();

         // Mensagem de sucesso
        return redirect()->route('site.inscricoes')->with('sucesso', 'Inscricao realizada com sucesso!');
        
    }
}
