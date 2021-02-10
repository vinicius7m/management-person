@extends('layouts.app')

@section('content')
<h1>Criar loja</h1>

<form action="{{ route('people.person') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div>
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" />
    </div>
    <div>
        <label for="birth">Nascimento</label>
        <input type="date" name="birth" id="birth" />
    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
@endsection