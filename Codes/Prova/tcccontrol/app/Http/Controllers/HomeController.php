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
        $professor = Professor::where('area', 'like', '%' . $request->area . '%')->orderBy('nome', 'asc');
        return view('professors', ['professors' => $professor->paginate(15)]);
    }
}
