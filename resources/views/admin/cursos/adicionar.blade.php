@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

    <div class="container">
        <h1 class="center">Adicionar Cursos</h1>    

        <div class="row">
            <form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('admin.cursos._form')

                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>

    </div>
@endsection