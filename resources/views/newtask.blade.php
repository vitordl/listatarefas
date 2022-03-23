@extends('layouts.layout_main')

<title>New - ToDoList</title>


@section('conteudo')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                
                <form action="{{ route('salvar') }}" method="post">
                    @csrf
                    <h4 class="">Task:</h4>
                    <input type="text" name="campo_texto" class="form-control">

                    <input type="submit" value="Save" class="btn btn-salvar-estilo my-3">

                    <a href="{{ route('home') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    
@endsection

