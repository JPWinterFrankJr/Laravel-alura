<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(Request $request)
    {
        $series = [ 
        'Punisher',
        'Lost',
        'Grey\'s Anatomy'
       ];

       return view('/series.index', ['series'=>$series]);
    }

    public function create()
    {
        return view('series.create');
    }
}
