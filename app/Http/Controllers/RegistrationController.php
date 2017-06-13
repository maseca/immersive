<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationFormRequest;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Retrieves the registration form
     * @return view the front end view
     */
    public function getRegistration(Request $request)
    {
    	if($request->has('name'))
    		$name = $request['name'];
    	return view('pages.registration.registration', compact('name'));
    }

    /**
     * Handles the form input
     * @param  RegistrationFormRequest $request the post request from the form
     * @return JSON the complete request
     */
    public function postRegistration(RegistrationFormRequest $request)
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
