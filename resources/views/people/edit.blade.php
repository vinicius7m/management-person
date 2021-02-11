@extends('layouts.app')

@section('content')

<a href="{{ route('people.index') }}">Voltar</a>

<h1>Editar loja</h1>

<form action="{{ route('people.update', ['person' => $person->id]) }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group"> 
        <label for="name">Nome: </label>

        <div>
            <input type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                value="{{ $person->name }}"
                required 
            />
        </div>
    </div>
    <div class="form-group">
        <label for="birth">Nascimento</label>

        <div>
            <input 
                type="date" 
                name="birth" 
                id="birth" 
                class="form-control" 
                value="{{ $person->birth }}"
                required 
                />

        </div>
    </div>

    <div>
        <button class="btn btn-primary btn-block" type="submit">Enviar</button>
    </div>
</form>
@endsection