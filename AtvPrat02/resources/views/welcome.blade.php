@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Bem-vindo(a) ao melhor jeito de se protocolar.') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('O que é o Protocolei?') }}</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur aliquid expedita qui error vel possimus, est minima delectus ipsum, mollitia, porro quibusdam. Fugit, quae. Minima eos corrupti odit earum autem laborum, doloremque voluptatum illo amet aspernatur, quo corporis, temporibus possimus nihil? Itaque a dolores natus, quasi praesentium nam recusandae ratione. Doloremque porro dignissimos labore rerum quas, soluta vel dolorum. Voluptates obcaecati assumenda eius nisi cum aspernatur iusto, sapiente provident, nulla doloremque id autem molestias porro qui? Dignissimos animi, accusantium cum adipisci labore voluptatibus corrupti fugiat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Assuntos Disponíveis') }}</h3>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">{{ __('Nome') }}</th>
                                        <th scope="col">{{ __('Preço') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{ $subject->name }}</td>
                                            <td>{{ $subject->price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
