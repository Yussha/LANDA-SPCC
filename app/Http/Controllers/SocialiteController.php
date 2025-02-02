<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    // Redirect to google
    public function redirectToGoogle(){
        // driver is static method provided by the Laravel socialite package
        // driver is supported the social services like Facebook, email, etc.
        // in this method we are trying to access the services from google and redirect the user to google login page
        return Socialite::driver('google')->redirect();
    }

    //TODO: Change the method name for readability
    // This is callback function
    public function questionnaire() {
        try {
            // fetch user details from google
            $googleUser = Socialite::driver('google')->user();

            // find or create the user
            // if the user already exists it doesn't need to create a new one
            // otherwise it will create a new one with the google user's information
            $user = User::firstOrCreate(
                // first argument is use to find the user
                ['email' => $googleUser->getEmail()],
                [
                    // this is second argument use to create the user if the user didn't exist
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'avatar' => $googleUser->getAvatar(),
                    'google_id' => $googleUser->id,
                    // password is hashed for security reasons (it's not stored in plain text)
                    'password' => bcrypt('password')
                ]
            );

            // Log the user in
            Auth::login($user);

            // redirect the user to the questionnaire page with the message that needs to be displayed
            return redirect()->route('questionnaire')->with('success', 'Login successful');
        } catch(\Exception $e) {
            // if there is any error while logging in, redirect the user back to the home page with the error message displayed
            return redirect()->route('home')->with('error', $e->getMessage());
        }
    }
}
