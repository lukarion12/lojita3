@extends('layout.base', ["current"=>"clientes"])

@section('body')
    <h1>Clientes</h1>

    <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">e-mail</th></th>
      <th scope="col">Rua</th>
      <th scope="col">Cidade</th>
      <th scope="col">Bairro</th>
      <th scope="col">Número</th>
      <th scope="col">UF</th>
      <th scope="col">CEP</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clientes as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nome}}</td>
            <td>{{$c->telefone}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->endereco['rua']}}</td>
            <td>{{$c->endereco['cidade']}}</td>
            <td>{{$c->endereco['bairro']}}</td>
            <td>{{$c->endereco['numero']}}</td>
            <td>{{$c->endereco['uf']}}</td>
            <td>{{$c->endereco['cep']}}</td>
            <td>
                <a href="/clientes/editar/{{$c->id}}" class="btn btn-sm btn-primary">Editar</a>
                <a href="/clientes/apagar/{{$c->id}}" class="btn btn-sm btn-danger">Apagar</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection