<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct()
	{
		// only guess user can access it!
		$this->middleware('guest', ['except' => 'destroy']);
	}

    //
    public function create()
    {
    	return view('sessions.create');
    }
    public function store()
    {
    	// Attempt to authenticate User
    	// if the credentials are invalid go to login again
    	if(!auth()->attempt(request(['email','password'])))
    	{
            return back()->withErrors([
                    'message' => 'Please check your credentials and try again'
                ]);
           	
    	}
        return redirect()->home();
    	// if auth go to home
    	

    }
    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
