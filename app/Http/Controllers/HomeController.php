<?php

namespace MEATLAB\Http\Controllers;

use Illuminate\Http\Request;
use MEATLAB\Fpost;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$posts = Fpost::all();
        return view('home', compact('posts'));
    }
}
