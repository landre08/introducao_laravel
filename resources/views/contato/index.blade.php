@extends('layout.site')

@section('titulo', 'Luciano')

@section('conteudo')
    <h1>Tela de Contato</h1>


    @foreach($contatos as $contato) 
        <p>{{ $contato['nome']}} - {{$contato['idade']}}</p>
    @endforeach

@endsection


