@extends('layouts.app')

@section('content')

<a href="{{ route('people.create') }}" class="btn btn-link"><h1>Criar pessoa</h1></a>

<div class="row" style="display: none;" id="div-success-message">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
           <strong>Sucesso!</strong> <span id="span-success-message"></span>
        </div>

    </div>
</div>
<div class="row" style="display: none;" id="div-danger-message">
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <strong>Atenção!</strong> <span id="span-danger-message"></span>
        </div>
    </div>
</div>

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
        <tr id="tr-person-{{ $person->id }}">
            <td> {{ $person->id }} </td>
            <td> {{ $person->name }} </td>
            <td> {{ $person->birth }} </td>
            <td> 
                <a href="{{ route('people.edit', ['person' => $person->id]) }}" class="btn btn-sm btn-warning">Editar</a> 
                <button onclick="openModalDeletePerson( {{ $person->id }} )" class="btn btn-sm btn-danger">Excluir</button> 
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $people->links() }}

<div class="modal" id="modal-delete-person" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Excluir pessoa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Você deseja excluir essa pessoa?</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="button-delete-person" class="btn btn-danger">Excluir</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript" src="{{ url('js/people/index.js') }}"></script>

@endsection