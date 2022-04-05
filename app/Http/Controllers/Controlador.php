<?php

namespace App\Http\Controllers;

use App\Http\Requests\testeRequest;
use Illuminate\Http\Request;
use App\Models\Tarefa;

class Controlador extends Controller
{
    
    //INDEX apresenta a pagina home
    public function home() 
    {
        $tarefa = Tarefa::where('visible', 1)->orderBy('done', 'desc')->get();   //tarefa = select * from tarefas
        return view('home', ['tarefa' => $tarefa]);
       //return response()->json(['tarefa' => $tarefa]);
    }

    public function invisible(){
        $tarefa = Tarefa::where('visible', 0)->orderBy('done', 'desc')->get();   //tarefa = select * from tarefas
        return view('invisible', ['tarefa' => $tarefa]);
    }

    public function about(){
        return view('about');
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
        $tarefasview = $tarefas->visible;
        $tarefas->delete();       
        $tarefas->save(); 
        
        if($tarefasview == 1){
            return redirect()->route('home');
        }else{
            return redirect()->route('invisible');
        }   
       
    }

    public function done($id){
        $tarefas = Tarefa::find($id);
        $tarefasview = $tarefas->visible;
        $tarefas->done = now();
        $tarefas->save();

        if($tarefasview == 1){
            return redirect()->route('home');
        }else{
            return redirect()->route('invisible');
        }
        
    }

    public function undone($id){
        $tarefas = Tarefa::find($id);
        $tarefasview = $tarefas->visible;
        $tarefas->done = null;
        $tarefas->save();

        if($tarefasview == 1){
            return redirect()->route('home');
        }else{
            return redirect()->route('invisible');
        }
    }


    public function hide($id){
        $tarefas = Tarefa::find($id);
        $tarefas->visible = 0;
        $tarefas->save();

        return redirect()->route('home');
    }

    public function view_hide($id){
        $tarefas = Tarefa::find($id);
        $tarefas->visible = 1;
        $tarefas->save();

        return redirect()->route('invisible');
    }
    



    public function teste_validacao_login(testeRequest $req){
        $req->validated();
        $usuario = $req->input('usuario');
        return view('teste_validacao_login', ['usuario' => $usuario]);


    }

    public function teste_session(){

       // session()->put('nome', 'Vitor de lucca');
       //session()->put('nome2', 'Ciclano');
       

        //session()->forget('nome2');
        //session()->flush();
        $clientes = [
            [
            'nome' => 'vitor',
            'telefone' => '33333333',
            'cargo' => 'TI'
            ],

            [
            'nome' => 'joao',
            'telefone' => '7777777',
            'cargo' => 'adm'
            ],

            [
            'nome' => 'maria',
            'telefone' => '555555',
            'cargo' => 'comercial'
            ],

            [
            'nome' => 'joana',
            'telefone' => '666666',
            'cargo' => 'qualidade'
            ],

          
        ];

       // session()->put($clientes);
        // session()->forget($clientes['nome']);


        echo "<pre>";
        print_r(session()->all());


    }

    
}
