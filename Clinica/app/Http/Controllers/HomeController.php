<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cita;
class HomeController extends Controller
{
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',(['Cita'=> \App\Cita::all(),'Evento'=> \App\Evento::all()]));
    }
}
