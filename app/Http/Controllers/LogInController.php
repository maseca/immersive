<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogInFormRequest;
use Illuminate\Http\Request;

class LogInController extends Controller
{
    /**
     * Retrieves the registration form
     * @return view the front end view
     */
    public function getLogIn(Request $request)
    {
    	if($request->has('name'))
    		$name = $request['name'];
    	return view('pages.registration.login', compact('name'));
    }

    /**
     * Handles the form input
     * @param  LogInFormRequest $request the post request from the form
     * @return JSON the complete request
     */
    public function postLogIn(LogInFormRequest $request)
    {
    	return $request->all();
    }

    /**
     * Handles the route parameter passed in from the front end
     * @param  String $id the given id
     * @return String the given id
     */
    public function handleRouteParameter($id)
    {
    	return $id;
    }
}
