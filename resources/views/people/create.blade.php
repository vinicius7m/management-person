@extends('layouts.app')

@section('content')
<h1 class="mt-5">Criar loja</h1>

<form action="{{ route('people.person') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group"> 
        <label for="name">Nome: </label>

        <div>
            <input type="text" name="name" id="name" class="form-control" required />
        </div>
    </div>
    <div class="form-group">
        <label for="birth">Nascimento</label>

        <div>
            <input type="date" name="birth" id="birth" class="form-control" required />
        </div>
    </div>

    <div>
        <button class="btn btn-primary btn-block" type="submit">Enviar</button>
    </div>
</form>
@endsection