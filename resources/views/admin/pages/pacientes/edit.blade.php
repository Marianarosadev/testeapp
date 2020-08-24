@extends('admin.layouts.app')

@section('content')

    <h1>Editar Paciente {{ $paciente->Nome }} </h1>

    <form action="{{ route('paciente.update', $paciente->Id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="Nome" placeholder="Nome" value="{{ $paciente->Nome }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Cpf" placeholder="Cpf" value="{{ $paciente->Cpf }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Rg" placeholder="Rg" value="{{ $paciente->Rg }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="CartaoSus" placeholder="CartaoSus" value="{{ $paciente->CartaoSus }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Sexo" placeholder="Sexo" value="{{ $paciente->Sexo }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Nascimento" placeholder="Nascimento" value="{{ $paciente->Nascimento }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="NomeDaMae" placeholder="Nome da mãe" value="{{ $paciente->NomeDaMae }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Telefone" placeholder="Telefone" value="{{ $paciente->Telefone }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Cep" placeholder="Cep" value="{{ $paciente->Cep }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="AvenidaRua" placeholder="Avenida/Rua" value="{{ $paciente->AvenidaRua }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Numero" placeholder="Número" value="{{ $paciente->Numero }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Quadra" placeholder="Quadra" value="{{ $paciente->Quadra }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Lote" placeholder="Lote" value="{{ $paciente->Lote }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Complemento" placeholder="Complemento" value="{{ $paciente->Complemento }}"> 
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Bairro" placeholder="Bairro" value="{{ $paciente->Bairro }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Cidade" placeholder="Cidade" value="{{ $paciente->Cidade }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="UF" placeholder="UF" value="{{ $paciente->UF }}">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="Foto" placeholder="Foto" value="{{ $paciente->Foto }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>

@endsection