<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class Controlador extends Controller
{
    
    //INDEX apresenta a pagina home
    public function home() 
    {
        $tarefa = Tarefa::orderBy('done', 'desc')->get();   //tarefa = select * from tarefas
        return view('home', ['tarefa' => $tarefa]);
    }

    
    //CREATE formulario para criar novos dados
    public function newtask()
    {
       return view('newtask');
    }

    //STORE salva os dados na tabela do bd com os dados capturados do metodo post
    public function salvar(Request $request)
    {
        $texto = $request->input('campo_texto');
        
        $tarefas = new Tarefa();
        $tarefas->task = $texto;
        $tarefas->done = now();
        $tarefas->save();

        return redirect()->route('home');
    }

   //SHOW a ideia do show é pesquisar
    public function show($id)
    {
        
    }

   //EDIT formulario para editar selecionado a partir do id
    public function edit($id)
    {
        $tarefas = Tarefa::find($id);

        return view('edit', ['tarefas' => $tarefas ]);
    }

    //UPDATE salva os dados que foram editados com o metodo post, sobrescrevendo na tabela do bd de acordo com o id.
    public function update(Request $request, $id)
    {
        $tarefas = Tarefa::find($id);
        $texto = $request->input('campo_texto');
        $tarefas->task = $texto;
        $tarefas->save();

        return redirect()->route('home');
    }

   //DESTROY para deletar de acordo com o id
    public function deletar($id)
    {
        $tarefas = Tarefa::find($id);
        $tarefas->delete();
        $tarefas->save();

        return redirect()->route('home');

    }
}
