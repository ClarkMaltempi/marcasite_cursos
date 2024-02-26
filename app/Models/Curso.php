<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //permitindo acessar todas as inscrições associadas a um curso usando $curso->inscricoes.
    public function inscricoes()
    {
        return $this->hasMany(Inscrito::class, 'curso_id');
    }
}
