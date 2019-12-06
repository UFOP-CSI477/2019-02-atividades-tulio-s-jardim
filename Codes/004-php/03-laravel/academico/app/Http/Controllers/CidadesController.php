<?php

namespace App\Http\Controllers;

use App\Cidades;
use App\Estado;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Model -> recuperação dos dados
        $cidades = Cidades::orderBy('nome')->get();

        // View -> exibição dos dados
        return view('cidades.index')
                    ->with('cidades', $cidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::orderBy('nome')->get();
        return view('cidades.create',
          [ 'estados' => $estados ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        // Validação
        // Gravar
        // Opção 01:
        // $c = new Cidade;
        // $c->nome = $request->nome;
        // $c->estado_id = $request->estado_id;
        // $c->save();
        // Opção 02:
        Cidades::create($request->all());
        // return redirect('/cidades');
        return redirect()->route('cidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function show(Cidades $cidades)
    {
        // $id
        $cidade = Cidade::find($id);
        dd($cidade);
        return view('cidades.show',
            [ 'cidades' => $cidades ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidades $cidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidades $cidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidades $cidades)
    {
        //
    }
}
