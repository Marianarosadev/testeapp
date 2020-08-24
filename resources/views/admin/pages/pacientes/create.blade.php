@extends('admin.layouts.app')

@section('content')

    <h1>Cadastrar Paciente</h1>

    @include('admin.includes.alerts')

    <form action="{{ route('paciente.store') }}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="Nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Cpf" placeholder="Cpf">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Rg" placeholder="Rg">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="CartaoSus" placeholder="CartaoSus">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Sexo" placeholder="Sexo">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Nascimento" placeholder="Nascimento">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="NomeDaMae" placeholder="Nome da mãe">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Telefone" placeholder="Telefone">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Cep" placeholder="Cep">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="AvenidaRua" placeholder="Avenida/Rua">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Numero" placeholder="Número">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Quadra" placeholder="Quadra">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Lote" placeholder="Lote">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Complemento" placeholder="Complemento"> 
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Bairro" placeholder="Bairro">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Cidade" placeholder="Cidade">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="UF" placeholder="UF">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="Foto" placeholder="Foto">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

@endsection