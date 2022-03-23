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
                    <thead class="table-estilo">
                      <tr>  
                        <th class="col-xl-8 col-sm-7 text-center">TAREFAS</th>
                        <th class="col-xl-4 col-sm-5 minha_tabela_acoes text-center">AÇÕES</th>
                      </tr>
                    </thead>
                
                    <tbody>
                    @foreach ($tarefa as $tf)
                    <tr  class="">
                        <td class="minha_tabela ">{{ $tf->task }}</td>
                        <td class="minha_tabela minha_tabela_linhas text-lg-center ">
                          <a href="#"><i class="fas fa-check-square text-success fa-lg mx-3"></i></a>
                          <a href="{{ route('edit', $tf->id) }}" ><i class="fas fa-edit fa-lg "></i></i></a>
                          <a href="#"><i class="fas fa-eye  fa-lg mx-3"></i></a>
                          <a href="{{route('deletar', $tf->id)}}"><i class="fas fa-trash-alt text-danger fa-lg "></i></a>
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


