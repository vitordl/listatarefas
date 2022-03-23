@extends('layouts.layout_main')
<title>Home - ToDoList</title>

@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <a href="{{ route('newtask') }}" class="btn btn-outline-info">New Task</a>

                <a href="{{ route('invisible') }}" class="btn btn-outline-danger ">List Invisibles</a>

                <div class="my-4"></div>

              
                
                <div class="table-responsive">
                <table class="table">             
                    <thead class="table-estilo">
                      <tr>  
                        <th class="col-xl-8 col-sm-7 text-center">TASKS</th>
                        <th class="col-xl-4 col-sm-5 minha_tabela_acoes text-center">ACTIONS</th>
                      </tr>
                    </thead>
                
                    <tbody>
                    @foreach ($tarefa as $tf)
                    <tr  class="">
                      @if ($tf->done != null)
                          <td class="minha_tabela ">{{ $tf->task }} <span class="status_task_pend">pending</span></td>
                      @else
                          <td class="minha_tabela ">{{ $tf->task }} <span class="status_task_done">done</span></td>
                      @endif
                        
                        <td class="minha_tabela minha_tabela_linhas text-lg-center ">
                          @if ($tf->done != null) {{--se existe um valor data faça--}}
                            <a href="{{route('undone', $tf->id)}}"><i class="far fa-check-square icone_uncheck fa-lg mx-3"></i></a>
                          @else {{--nao existe um valor de data, faça--}}
                            <a href="{{route('done', $tf->id)}}"><i class="fas fa-check-square icone_check fa-lg mx-3"></i></a>
                          @endif
                                                    
                          <a href="{{ route('edit', $tf->id) }}" ><i class="fas fa-edit fa-lg "></i></i></a>
                          @if ($tf->visible == 1)
                            <a href="{{route('hide', $tf->id)}}"><i class="fas fa-eye  fa-lg mx-3"></i></a>
                          @else
                          <a href="{{route('view_hide', $tf->id)}}"><i class="fas fa-eye text-danger  fa-lg mx-3"></i></a>
                          @endif
                          
                          <a href="{{route('deletar', $tf->id, ['valor' => 'y'])}}"><i class="fas fa-trash-alt text-danger fa-lg "></i></a>
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


