<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Mail\Welcome;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    // for validation of the forms

    // use Form Objects when the validation and logic and do not saturate the controller is huge, for this case is not neccesary

    public function rules()
    {
        return [
            // validate the form
            'name' => 'required',
            'email' => 'required|email',
            // to confirm password for that the password_confirmation field
            // confirmed field  <field_name>_confirmation
            'password' => 'required|confirmed'

        ];
    }

    // logic
    public function persist()
    {
        // this will not execute the below code before pass the validations
        // create and save the user

        $user = User::create([
            'name' => request('name'),
            'email'=> request('email'),
            'password' => Hash::make('password')
            ]);

        // // this is already a request
        // $user = User::create(
        //         $this->only([
        //             'name',
        //             'email',
        //             'password'
        //             // Hash::make('password')
        //     ]));


        // sign it user
        auth()->login($user);
        \Mail::to($user)->send(new Welcome($user));

    }
}
