<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\Professor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projeto = Projeto::join('alunos','projetos.aluno_id','=','alunos.id')
            ->join('professors','projetos.professor_id','=','professors.id')  
            ->select(['projetos.id AS idprojeto', 'semestre', 'ano', 'professors.nome AS professor', 'alunos.nome AS aluno', 'titulo', 'professors.area AS area'])
            ->orderBy('ano', 'desc')->orderBy('semestre', 'desc')->orderBy('alunos.nome', 'asc');
        return view('dashboard', ['projetos' => $projeto->paginate(15)]);
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function professores(Request $request)
    {
        $professor = Professor::where('area', 'like', '%' . $request->area . '%')->orderBy('area', 'asc')->orderBy('nome', 'asc');
        return view('professors', ['professors' => $professor->paginate(15)]);
    }
}
