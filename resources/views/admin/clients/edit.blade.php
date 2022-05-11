@extends('layouts.layout')

@section('content')
    <h3 class="text-center text-primary mt-4"><i class="fa-solid fa-user-pen"></i> Editar cliente</h3>
    @include('form._form_errors')
    <!--<form method="post" action="{{ route('clients.update',['client' => $client->id]) }}">-->
    {{ Form::model($client,['route' => ['clients.update',$client->id], 'method' => 'PUT' ]) }}
        @include('admin.clients._form')
        <button type="submit" class="btn btn-success mt-4"><i class="fa-solid fa-check"></i> Salvar</button>
    {{ Form::close() }}
    <div class="text-center">
        <a href="{{ route('clients.index') }}" class="btn btn-dark text-center mb-4 mt-4"><i class="fa-solid fa-circle-arrow-left"></i> Voltar</a>
    </div><!--text-center-->
@endsection