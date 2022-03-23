@extends('layouts.layout_main')

<title>ToDoList</title>


@section('outros')

    
                <form action="{{ route('update', $tarefas->id) }}" method="post">
                    @csrf
                    <h4 class="">Task:</h4>
                    <input type="text" name="campo_texto" class="form-control" value="{{ $tarefas->task }}">

                    <input type="submit" value="Update" class="btn btn-outline-danger my-3">

                    <a href="{{ route('home') }}" class="btn btn-light">Cancelar</a>
                </form>
    

     
@endsection


{{-- 
    
    no Controlador eu tenho as functions:
    public function edit($id)
    {
        $tarefas = Tarefa::find($id);

        return view('edit', ['tarefas' => $tarefas ]);
    }

    public function update(Request $request, $id)
    {
        $tarefas = Tarefa::find($id);
        $texto = $request->input('campo_texto');
        $tarefas->task = $texto;
        $tarefas->save();

        return redirect()->route('home');
    }
 --}}

