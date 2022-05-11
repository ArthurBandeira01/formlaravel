@extends('layouts.layout')

@section('content')
    <h3 class="text-center mt-4 text-primary"><i class="fa-solid fa-person"></i> Novo cliente</h3>
    <h4 class="text-center mt-3 text-primary">{{$clientType == \App\Models\Client::TYPE_INDIVIDUAL? 'Pessoa Física': 'Pessoa Jurídica'}}</h4>
    <a class="btn btn-warning" href="{{route('clients.create',['client_type' => \App\Models\Client::TYPE_INDIVIDUAL])}}"><i class="fa-solid fa-circle-user"></i> Pessoa Física</a> 
    <a class="btn btn-dark" href="{{route('clients.create',['client_type' => \App\Models\Client::TYPE_LEGAL])}}"><i class="fa-solid fa-address-card"></i> Pessoa Jurídica</a>
    @include('form._form_errors')
    <!--<form method="post" action="{{ route('clients.store') }}">-->
    {{ Form::open(['route' => 'clients.store']) }}
        @include('admin.clients._form')
        <button type="submit" class="btn btn-success mt-4">Criar</button>
    {{ Form::close() }}
@endsection