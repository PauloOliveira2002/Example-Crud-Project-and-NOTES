<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;

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
        $turmas = Turma::orderBy('id','desc')->paginate(10);

        return view('home', ['turmas' => $turmas]);
    }
}
