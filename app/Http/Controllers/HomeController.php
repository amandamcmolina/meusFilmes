<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->user_id = auth()->user()->id;
        $movie->titulo = request('titulo'); 
        $movie->diretor = request('diretor'); 
        $movie->ano = request('ano'); 
        $movie->comentario = request('comentario'); 
        $movie->nota = request('nota'); 

        $movie->save();
        return redirect('/home');
        
    }
}