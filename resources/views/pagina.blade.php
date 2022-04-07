@extends('layouts.layout_pagina')

@section('conteudo_pagina')

    <div class="container">
        <div class="row my-3">

            {{-- este nao é um card --}}
            <div class="col-md-3 mx-md-2 margem_especial  card_left ">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="" class="nav-link link_left active">Tarefas pendentes</a></li>
                    <li class="nav-item"><a href="" class="nav-link link_left">Nova tarefa</a></li>
                    <li class="nav-item"><div class="detalhe"></div><a href="" class="nav-link ">Todas Tarefas</a></li>
                </ul>
            </div>

            {{-- este é um card --}}
            <div class="col-md-8  card mx-md-2  pt-3 margem_afastamento">
                <h3 class="text-primary">Tarefas Teste</h3>
                <hr>
                <p>Comprar laranjas</p>
                <p>Arrumar a televisão</p>
                <p>Estudar mais</p>
                <p>Sempre pensar em abordagens</p>
                <p>Esteja aberto aos erros</p>
                <p>be open to the mistakes</p>
                <p>We must be open about our mistakes</p>
            </div>


            
        </div>
    </div>
    
    {{-- <div class="container-fluid">
        <div class="row my-3">
            <div class="col-sm-3 margem_especial">
                <ul class="nav flex-column card ">
                    <li class="nav-item"><a href="" class="nav-link">Tarefas pendentes</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Nova tarefa</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Todas Tarefas</a></li>
                </ul>
            </div>
            <div class="col-sm-3 margem_especial">
                <ul class="nav flex-column card ">
                    <li class="nav-item"><a href="" class="nav-link">Tarefas pendentes</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Nova tarefa</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Todas Tarefas</a></li>
                </ul>
            </div>


            <div class="col-sm-3 card">
                <h3 class="text-primary">Tarefas Teste</h3>
                <hr>
                <p>Comprar laranjas</p>
                <p>Arrumar a televisão</p>
                <p>Estudar mais</p>
            </div>


            <div class="col-sm-3 card">
                <h3 class="text-primary">Tarefas Teste</h3>
                <hr>
                <p>Comprar laranjas</p>
                <p>Arrumar a televisão</p>
                <p>Estudar mais</p>
            </div>
        </div>
    </div> --}}




@endsection