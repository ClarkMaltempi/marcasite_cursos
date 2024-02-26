<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class cursos extends Controller
{
    public function castroCursos(){
        return view('site.cadastroCourses');
    }

    public function salvarCadastro(Request $request){

        $regras = [
            'nome_curso' => 'required|min:3|max:255',
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'dtinicio_inscricoes' => 'required|date',
            'dttermino_inscricoes' => 'required|date|after:dtinicio_inscricoes',
            'qtd_inscritos' => 'required|integer|min:1',
            'arquivo' => 'required|mimes:pdf,doc,docx|max:2048', 
        ];
        
        $mensagens = [
            'nome_curso' => 'Nome incorreto.',
            'descricao' => 'Deve haver descricao',
            'dttermino_inscricoes.after' => 'A data de término deve ser posterior à data de início.',
            'arquivo.required' => 'Por favor, selecione um arquivo.',
            'arquivo.mimes' => 'O arquivo deve ser do tipo pdf, doc ou docx.',
            'arquivo.max' => 'O tamanho máximo do arquivo é 2MB.',
            // ... outras mensagens ...
        ];
       
        // Validando os dados do formulário
        $validator = Validator::make($request->all(), $regras, $mensagens);
        
       // Se a validação falhar, redirecione com os erros
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $curso = new Curso();
        $curso->nome_curso = $request->input('nome_curso');
        $curso->descricao = $request->input('descricao');
        $curso->valor = $request->input('valor');
        $curso->dtinicio_inscricoes = $request->input('dtinicio_inscricoes');
        $curso->dttermino_inscricoes = $request->input('dttermino_inscricoes');
        $curso->qtd_inscritos = $request->input('qtd_inscritos');

        // Salvar o arquivo
        if ($request->hasFile('arquivo')) {
            $arquivo = $request->file('arquivo');
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoArquivo = $arquivo->storeAs('data_arquivos', $nomeArquivo, 'public'); 
            $curso->nome_arquivo = $nomeArquivo;
            $curso->path_arquivo = $caminhoArquivo;
        }

        $curso->save();

        // Mensagem de sucesso
        return redirect()->route('site.cadastroCourses')->with('sucesso', 'Curso cadastrado com sucesso!');
       

    }
}
