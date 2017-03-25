<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    //
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	// validate the form
    	$this->validate(request(),[
    			'name' => 'required',
    			'email' => 'required|email',
    			// to confirm password for that the password_confirmation field
    			// confirmed field  <field_name>_confirmation
    			'password' => 'required|confirmed'

    		]);

    	// create and save the user
    	$user = User::create([
            'name' => request('name'),
            'email'=> request('email'),
            'password' => Hash::make('password')
            ]);


    	// sign it user
    	auth()->login($user);
        \Mail::to($user)->send(new Welcome($user));

    	// return to the home page
    	return redirect()->home();
    }
}
