<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    //
    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        $form->persist();
        // Flash store items in the session only for the next request.
        session()->flash('message', 'Thanks So Much for signing up');
    	// return to the home page
    	return redirect()->home();
    }
}
