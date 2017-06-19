<?php

namespace MEATLAB\Http\Controllers;

use Auth;
use MEATLAB\Fpost;
use Illuminate\Http\Request;

class NewPostController extends Controller
{
    protected $redirectTo = '/home';

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
        return view('newpost');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'content' => 'required|string',
			'thread_id' => 'required|integer'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(Request $data)
    {
        Fpost::create([
            'content' => $data->input('content'),
			'user_id' => Auth::id(),
			'thread_id' => $data->input('thread_id')
        ]);

		$posts = Fpost::all();
		return view('home', compact('posts'));
    }

	public function handleRouteParam($post_id){
		$post = Fpost::where('id', $post_id)->first();
        return view('editpost', compact('post'));
	}

	public function update(Request $data, $id){
		$editable = Fpost::where($id)->first();
        $editable->update([
            'content' => $data->input('content'),
        ]);

		$posts = Fpost::all();
		return view('home', compact('posts'));
	}

    /*public function destroy(Request $data)
    {
		$posts = Fpost::all();
        Fpost::create([
            'content' => $data->input('content'),
			'user_id' => Auth::id(),
			'thread_id' => $data->input('thread_id')
        ]);

		return view('home', compact('posts'));
    }
	*/
}
