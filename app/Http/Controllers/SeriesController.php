<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        //$request->get('id');
        //$request->method();
        //$request->url();
        //return redirect('www.google.com');
        $series = [
        'serie 1',
        'serie 2',
        'serie 3'
        ];

        return view('series.index')->with('series', $series);

    }
}
