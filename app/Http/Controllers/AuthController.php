<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    // Register the user
    public function register(Request $request) {
        
        // Validate the request
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'string'],
        ]);

        // Registerd User
        $user = User::create($validatedData);

        // Login User
        Auth::login($user);

        // Redirect to specified page
        return redirect()->route("questionnaire");

        // if invalid credentials redirect the user back to the previous page
        return redirect()->back()->withInput()->withErrors($request->errors())->with('form', 'register');

        // for testing purposes
        // dd("successfully registered");
    }

    //TODO: create a login method
    public function login(Request $request) {

        $validatedData = $request->validate([
            'email' => ['required', 'email', 'max:25'],
            'password' => ['required','min:8','string'],
        ]);

        // dd($validatedData);

        if(Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->intended('questionnaire');
        }

        // dd($validatedData);
        return redirect()->back();

    }

    // logout method
    public function logout(Request $request) {
        /**
         *  Removes the login info from the session, so the user is no longer logged in.
         */
        Auth::logout();
        
        // It clears all temporary data stored for the user to fully log them out.
        $request->session()->invalidate();

        // generate new token for security purposes
        $request->session()->regenerateToken();

        // Redirect to home page
        return redirect('/');
    }
}
