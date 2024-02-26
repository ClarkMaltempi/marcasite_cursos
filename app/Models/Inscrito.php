<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Inscrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'nome',
        'email',
        'cpf',
        'endereco',
        'empresa',
        'telefone',
        'funcao',
        'curso', // Adiciona o campo curso_nome
        'senha',
    ];
    //permitindo o acesso ao curso associado a uma inscrição usando $inscricao->curso.
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function recuperaCursos(){
        $cursos = Curso::all(); // Recupera todos os cursos da tabela cursos
        return view('site.inscricoes', compact('cursos'));
    }



}
