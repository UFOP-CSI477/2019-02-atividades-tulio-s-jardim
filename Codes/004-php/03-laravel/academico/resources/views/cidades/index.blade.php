@extends('principal')

@section('conteudo')

  <table class="table table-striped table-bordered">
    <thead class="table-light">
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Código de Estado</th>
      </tr>
    </thead>
    <tbody>
  @foreach ($cidades as $c)
      <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->estado_id }}</td>
      </tr>
  @endforeach
    </tbody>
  </table>
@endsection