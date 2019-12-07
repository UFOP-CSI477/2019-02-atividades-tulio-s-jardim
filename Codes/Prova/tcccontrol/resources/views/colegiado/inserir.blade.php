@extends('layouts.app', ['title' => __('Projetos')])

@section('content')
    @include('users.partials.header', ['title' => __('Inserir Projeto')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Gerenciamento de Projetos') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('colegiado.store') }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Dados do Projeto') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-aluno">{{ __('Aluno') }}</label>
                                    <select name="aluno" id="input-aluno" class="form-control form-control-alternative" required autofocus>
                                        @foreach ($alunos as $aluno)
                                            <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                
                                <div class="form-group">
                                    <label class="form-control-label" for="input-professor">{{ __('Professor') }}</label>
                                    <select name="professor" id="input-professor" class="form-control form-control-alternative" required autofocus>
                                        @foreach ($professors as $professor)
                                            <option value="{{$professor->id}}">{{$professor->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-titulo">{{ __('Titulo') }}</label>
                                    <input type="text" maxlength="100" name="titulo" id="input-titulo" class="form-control form-control-alternative" placeholder="{{ __('titulo') }}" value="{{ old('titulo') }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label" for="input-ano">{{ __('Ano') }}</label>
                                    <input type="number" min="2009" step="1" name="ano" id="input-ano" class="form-control form-control-alternative" placeholder="{{ __('ano') }}" value="{{ old('ano') }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label" for="input-semestre">{{ __('Semestre') }}</label>
                                    <select name="semestre" id="input-semestre" class="form-control form-control-alternative" required autofocus>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Inserir Projeto') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection