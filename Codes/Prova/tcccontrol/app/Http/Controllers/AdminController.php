<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\Professor;
use App\Aluno;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function alunos()
    {
        $aluno = Aluno::orderBy('curso', 'asc')->orderBy('nome', 'asc');
        return view('colegiado.alunos', ['alunos' => $aluno->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inserir()
    {
        return view('colegiado.inserir', ['alunos' => Aluno::orderBy('nome', 'asc')->get(), 'professors' => Professor::orderBy('nome', 'asc')->get()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProject = new Projeto;
        $newProject->aluno_id = $request->aluno;
        $newProject->professor_id = $request->professor;
        $newProject->titulo = $request->titulo;
        $newProject->ano = $request->ano;
        $newProject->semestre = $request->semestre;
        $newProject->save();

        return redirect()->route('home')->withStatus(__('Projeto inserido com sucesso.'));
    }
}
