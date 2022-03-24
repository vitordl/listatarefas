@extends('layouts.layout_pagina')

@section('conteudo_pagina')
    
    <div class="container">
        <div class="row my-3">
            <div class="col-sm-3 margem_especial">
                <ul class="nav flex-column card ">
                    <li class="nav-item"><a href="" class="nav-link">Tarefas pendentes</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Nova tarefa</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Todas Tarefas</a></li>
                </ul>
            </div>


            <div class="col-sm-8 card">
                <h3 class="text-primary">Tarefas Teste</h3>
                <hr>
                <p>Comprar laranjas</p>
                <p>Arrumar a televisão</p>
                <p>Estudar mais</p>
            </div>
        </div>
    </div>




@endsection