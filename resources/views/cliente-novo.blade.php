@extends('layout.base', ['current'=>'clientes'])

@section('body')
    <h1>Novo Cliente</h1>
    <form action = "/clientes" method="POST">
        @csrf
        <div class = "form-group">        
            <label for="nome">Nome</label>
            <input type = "text" class = "form-control" name="nome" id = "nome" placeholder = "Nome">
            <label for="telefone">Telefone</label>
            <input type = "text" class = "form-control" name="telefone" id = "telefone" placeholder = "Telefone">
            <label for="email">e-mail</label>
            <input type = "email" class = "form-control" placeholder = "e-mail" name="email" id = "email">
            <label for="rua">Rua</label>
            <input type = "text" class = "form-control" name="rua" id = "rua" placeholder = "Rua">
            <label for="bairro">Bairro</label>
            <input type = "text" class = "form-control" name="bairro" id = "bairro" placeholder = "Bairro">
            <label for="numero">Número</label>
            <input type = "text" class = "form-control" name="numero" id = "numero" placeholder = "Número">
            <label for="cidade">Cidade</label>
            <input type = "text" class = "form-control" name="cidade" id = "cidade" placeholder = "Cidade">
            <label for="cep">CEP</label>
            <input type = "text" class = "form-control" name="cep" id = "cep" placeholder = "CEP">
            <label for="uf">UF</label>
            <input type = "text" class = "form-control" name="uf" id = "uf" placeholder = "UF">
        </div>
        <button type="submit" class = "btn btn-success btn-sm">Salvar</button>
        <button type="cancel" class = "btn btn-danger btn-sm">Cancelar</button>
    </form>
@endsection