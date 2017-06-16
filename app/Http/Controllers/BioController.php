<?php

namespace MEATLAB\Http\Controllers;

use MEATLAB\User;
use Auth;
use Illuminate\Http\Request;

class BioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('editbio');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'bio' => 'required|string'
        ]);
    }

    public function create(Request $data)
    {
		$user = User::where('id', Auth::id())->first();
        $user->update([
            'bio' => $data->input('bio'),
        ]);

		return view('home');
    }
}
