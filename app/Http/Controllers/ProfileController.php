<?php

namespace MEATLAB\Http\Controllers;

use MEATLAB\User;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
		$user = User::with('fposts')->where('id', Auth::id())->first();
        return view('profile', compact('user'));
    }
	
	public function handleRouteParam($user_name){
		$user = User::with('fposts')->where('user_name', $user_name)->first();
        return view('profile', compact('user'));
	}
}
