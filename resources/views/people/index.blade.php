@extends('layouts.app')

@section('content')
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
                <a class="btn btn-warning">Editar</a> 
                <a class="btn btn-danger">Excluir</a> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $people->links() }}

@endsection