@extends('layouts.layout')

@section('content')
    <h3 class="text-center text-primary mt-4"><i class="fa-solid fa-eye"></i> Ver cliente</h3>
    <a href="{{ route('clients.index') }}" class="btn btn-dark text-center mt-4"><i class="fa-solid fa-circle-arrow-left"></i> Voltar</a>
    <a class="btn btn-primary mt-4" href="{{ route('clients.edit',['client' => $client->id]) }}"><i class="fa-solid fa-user-pen"></i> Editar</a>
    <a class="btn btn-danger mt-4" href="{{ route('clients.destroy',['client' => $client->id]) }}"
        onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}"><i class="fa-solid fa-trash-can"></i> Excluir</a>
    <!--<form id="form-delete"style="display: none" action="{{ route('clients.destroy',['client' => $client->id]) }}" method="post">-->
    {{Form::open(['route' => ['clients.destroy',$client->id],'method' => 'DELETE', 'id' => 'form-delete'])}}
    {{Form::close()}}
    <br/><br/>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$client->id}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$client->name}}</td>
        </tr>
        <tr>
            <th scope="row">Documento</th>
            <td>{{$client->document_number_formatted}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{$client->email}}</td>
        </tr>
        <tr>
            <th scope="row">Telefone</th>
            <td>{{$client->phone}}</td>
        </tr>
        <tr>
            <th scope="row">Estado Civil</th>
            <td>
                @switch($client->marital_status)
                    @case(1)
                        Solteiro
                        @break

                    @case(2)
                        Casado
                        @break

                    @case(3)
                        Divorciado
                        @break
                @endswitch
            </td>
        </tr>
        <tr>
            <th scope="row">Data Nasc.</th>
            <td>{{$client->date_birth_formatted}}</td>
        </tr>
        <tr>
            <th scope="row">Sexo</th>
            <td>{{$client->sex_formatted}}</td>
        </tr>
        <tr>
            <th scope="row">Def. Física</th>
            <td>{{$client->physical_disability}}</td>
        </tr>
        <tr>
            <th scope="row">Inadimplente</th>
            <td>{{$client->defaulter?'Sim': 'Não'}}</td>
        </tr>
        </tbody>
    </table>
@endsection