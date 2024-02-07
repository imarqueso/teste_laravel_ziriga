@extends('layout')

@section('title', 'Teste Laravel Ziriga')

@section('content')
    <h1>Dados formulário Mídia Programática</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Whatsapp</th>
                <th>E-mail</th>
                <th>Cargo</th>
                <th>Segmento</th>
                <th>Interesse</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $lead)
                <tr>
                    <td>{{$lead->id}}</td>
                    <td>{{$lead->nome}}</td>
                    <td>{{$lead->whatsapp}}</td>
                    <td>{{$lead->email}}</td>
                    <td>{{$lead->cargo}}</td>
                    <td>{{$lead->segmento}}</td>
                    <td>{{$lead->interesse}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('apiLeads') }}" target="_blank">Visualizar API dos Leads</a>
@endsection

