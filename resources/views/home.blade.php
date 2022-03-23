@extends('layouts.layout_main')
<title>Home - ToDoList</title>

@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <a href="{{ route('newtask') }}" class="btn btn-outline-info">Criar Novo</a>

                <a href="{{ route('newtask') }}" class="btn btn-outline-danger ">Listar Invisibles</a>

                <div class="my-4"></div>
                
                
                <div class="table-responsive">
                <table class="table">             
                    <thead class="table-estilo ">
                      <tr>
                        <th scope="col">TAREFAS</th>
                        <th scope="col">AÇÕES</th>
                      
                      </tr>
                    </thead>
                
                    <tbody>
                    @foreach ($tarefa as $tf)
                    <tr>
                        <td>{{ $tf->task }}</td>
                        <td><a href="{{ route('edit', $tf->id) }}"><i class="fa fa-pencil mx-2 text-danger"></i></a>
                          <a href="#"><i class="fa fa-check text-success"></i></a>
                          <a href="#"><i class="fa fa-eye mx-2"></i></a>
                        </td>
                    </tr>
                    
                    @endforeach
                      
                    </tbody>
                  </table>
                </div>


                  <span class="mark">Total: <strong>{{ $tarefa->count() }}</strong></span>
            </div>
        </div>
    </div>
         
@endsection


