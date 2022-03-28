@extends('layouts.layout_validacao')

@section('validacao')
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-3">
                <h3 class="text-center">Formulário Teste</h3>
                <hr>


                <form action="{{route('teste_validacao_login')}}" method="post">
                    @csrf
                    <input type="text" class="form-control" placeholder="usuario" name="usuario" value="{{old('usuario')}}"><br>
                    <input type="password" name="senha" id="" class="form-control" placeholder="senha" value="{{old('senha')}}">

                    <input type="submit" value="Logar" class="my-3 btn btn-info">
                </form>

               <div class="row">
                   <div class="col-md-8 offset-md-2 text-center">
                    @if ($errors->any())
                    @foreach ($errors->all() as $erros)
                       <div class="alert-warning">{{$erros}}</div> <br>
                    @endforeach
                @endif
                   </div>
               </div>
              

            </div>
        </div>
    </div>
    




@endsection