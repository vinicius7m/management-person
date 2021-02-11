@extends('layouts.app')

@section('content')

<a href="{{ route('people.create') }}" class="btn btn-link"><h1>Criar pessoa</h1></a>

<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($people as $person)
        <tr>
            <td> {{ $person->id }} </td>
            <td> {{ $person->name }} </td>
            <td> {{ $person->birth }} </td>
            <td> 
                <a href="{{ route('people.edit', ['person' => $person->id]) }}" class="btn btn-sm btn-warning">Editar</a> 
                <a href="{{ route('people.destroy', ['person' => $person->id]) }}" class="btn btn-sm btn-danger">Excluir</a> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $people->links() }}

@endsection