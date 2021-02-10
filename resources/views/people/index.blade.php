@extends('layouts.app')

@section('content')
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Nascimento</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($people as $person)
        <tr>
            <td> {{ $person->id }} </td>
            <td> {{ $person->name }} </td>
            <td> {{ $person->birth }} </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $people->links() }}

@endsection