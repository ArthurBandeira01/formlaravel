@extends('layouts.layout')

@section('content')
    <h3 class="mt-4 text-center text-primary"><i class="fa-solid fa-clipboard-list"></i> Listagem de clientes</h3>
    <br/><br/>
    <a class="btn btn-success mb-4" href="{{ route('clients.create') }}"><i class="fa-solid fa-plus"></i> Criar novo</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CNPJ/CPF</th>
            <th id="col-date">Data Nasc.</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th id="col-sex">Sexo</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->document_number }}</td>
                <td id="date_birth">{{ $client->date_birth_formatted }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td id="sex">{{ $client->sex }}</td>
                <td>
                    <a class="btn btn-primary text-warning" href="{{route('clients.edit',['client' => $client->id])}}"><i class="fa-solid fa-user-pen"></i> Editar</a> 
                    <a class="btn btn-primary text-warning mg" href="{{route('clients.show',['client' => $client->id])}}"><i class="fa-solid fa-eye"></i> Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--  {{$clients->links()}}  --}}
@endsection