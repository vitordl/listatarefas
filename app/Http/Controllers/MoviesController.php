<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\MoviesRequest;

class MoviesController extends Controller
{
    public function index(){
        return response()->json($this->moviesAll());
    }

    public function getMovie($id){
       //$movies = $this->moviesAll();
       $movies =  null;
       foreach($this->moviesAll() as $mov){
           if($mov['id'] == $id){
               $movies = $mov;
           }
       }
       return $movies ? response()->json($movies) : "erro";
    }

    public function getMovieByGenre($genre){
        $movies = null;
        foreach($this->moviesAll() as $mov){
            if($mov['genre'] == $genre){
                $movies = $mov;
            }

        }
        return $movies ? response()->json($movies) : 'erro genre';
    }

    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required'
            ]
        );
        return response()->json($request->all());
    }

    public function update(){
        return "O item foi atualizado";
    }

    public function delete(){
        return "Foi removido com sucesso";
    }


    protected function moviesAll(){
        return [
            [
            'name' => 'A lagoa azul',
            'id' => 1,
            'genre' => 'Duvidoso',
            ],

            [
            'name' => 'Spot',
            'id' => 2,
            'genre' => 'Comédia',
            ],

            [
            'name' => 'O Chamado',
            'id' => 3,
            'genre' => 'Suspense',
            ]
        ];
    }
}
