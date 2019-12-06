<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProtoBrasilAdminLTE</title>
    
    <link rel="stylesheet" href={{ asset("vendor/adminlte/dist/css/adminlte.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/styles.css") }}>

            
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <h1 class="flutua-e"><span>Proto</span>Brasil</h1>
            <div class="flutua-d">
                @if (Route::has('login'))
                    @auth
                        <a class="btn btn-primary my-2" href="{{ url('/home') }}">Início</a>
                    @else
                        <a class="btn btn-primary my-2" href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a class="btn btn-primary my-2" href="{{ route('register') }}">Criar Conta</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Tipos de Protocolos</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($subjects as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->price }})</td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>