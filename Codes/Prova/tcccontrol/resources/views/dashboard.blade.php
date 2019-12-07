@extends('layouts.app')

@section('content')
    @include('users.partials.header', ['title' => __('TCCs da UFOP')])   
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Projetos Iniciados</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Ano') }}</th>
                                    <th scope="col">{{ __('Semestre') }}</th>
                                    <th scope="col">{{ __('ID') }}</th>
                                    <th scope="col">{{ __('Professor') }}</th>
                                    <th scope="col">{{ __('Aluno') }}</th>
                                    <th scope="col">{{ __('Título') }}</th>
                                    <th scope="col">{{ __('Área') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projetos as $projeto)
                                    <tr>
                                        <td>{{ $projeto->ano }}</td>
                                        <td>{{ $projeto->semestre }}</td>
                                        <td>{{ $projeto->id }}</td>
                                        <td>{{ $projeto->professor->nome }}</td>
                                        <td>{{ $projeto->aluno->nome }}</td>
                                        <td>{{ $projeto->titulo }}</td>
                                        <td>{{ $projeto->professor->area }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush