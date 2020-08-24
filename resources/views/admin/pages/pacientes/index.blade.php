@extends('admin.layouts.app')

@section('content')

    <h1>Exibindo os pacientes</h1>
    <a href="{{ route('paciente.create') }}" class="btn btn-primary">Cadastrar</a>

    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Rg</th>
                <th width="60">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Paciente as $Pacientes)
                <tr>
                    <td>{{ $Pacientes->Nome }}</td>
                    <td>{{ $Pacientes->Cpf }}</td>
                    <td>{{ $Pacientes->Rg }}</td>
                    <td>
                        <a href="{{ route('paciente.edit', $Pacientes->Id) }}" class="btn btn-info">Editar</a>
                        
                        <form action="{{ route('paciente.destroy', $Pacientes->Id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $Paciente->links() !!}

@endsection
