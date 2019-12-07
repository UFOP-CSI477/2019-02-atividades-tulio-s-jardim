@extends('layouts.app')

@section('content')
    @include('users.partials.header', ['title' => __('Professores da UFOP')])   
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Professores</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('home.professores', '')}}" class="btn btn-sm btn-primary">Visualizar todos</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('ID') }}</th>
                                    <th scope="col">{{ __('Professor') }}</th>
                                    <th scope="col">{{ __('Área') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($professors as $professor)
                                    <tr>
                                        <td>{{ $professor->id }}</td>
                                        <td>{{ $professor->nome }}</td>
                                        <td>{{ $professor->area }}</td>
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