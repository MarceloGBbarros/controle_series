<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
        //$request->get('id');
        //$request->method();
        //$request->url();
        //return redirect('www.google.com');
        /*$series = [
        'serie 1',
        'serie 2',
        'serie 3',
        'A>B'
        ];
        */
       // $series= \DB::select('SELECT nome from series');
       // dd($series); // faz um vardump e encerra
        $series = Serie::all(); //traz todas as séries

        //se eu quiser buscar de forma ordenada eu posso fazer dessa forma
        $series = Serie::query()->orderBy('nome')->get();
       // dd($series);




        return view('series.index')->with('series', $series);

    }
    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $nomeSerie = $request->input('nome');
        //formas de inserir no banco de dados
        //forma menos interessante
        /*if (\DB::insert('insert into series (nome) values (?)', [$nomeSerie])){
         return redirect('/series');
        }else{
            return "erro";
        }*/

        //melhor forma para fazer os cruds com laravel
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect('/series');
    }

}
