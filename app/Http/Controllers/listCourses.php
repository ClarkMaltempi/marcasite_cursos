<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class listCourses extends Controller
{
    public function listCursos(){
        return view('site.ListaCourses');
    }

    public function listarCourses()
    {
        // Buscar todos os cursos
        $cursos = Curso::all();

        return view('site.ListaCourses', compact('cursos'));
    }

    
}
