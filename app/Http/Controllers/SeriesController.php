<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = [
        'serie 1',
        'serie 2',
        'serie 3'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
        $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";
        return $html;

    }
}
