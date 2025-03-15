<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SocialAuthController extends Controller
{
    //

    private $roles_map = [
        'student' => 1,
        'teacher' => 2,
        'parent' => 3,
        'ctv' => 4,
        'admin' => 5
    ];

    public function redirect($provider, Request $request)
    {
        session(['oauth_role' => $request->input('role')]);
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider, Request $request)
    {   
        $socialUser = Socialite::driver($provider)->user();

        //Check if user exists
        $user = User::where('email', $socialUser->getEmail())->first();
        $role = session('oauth_role', 'default_role');

        if (!$user) {
            // Create new user
            if($provider == "google"){
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'password' => Hash::make(Str::random(32)),
                    'provider' => $provider,
                    'role_id' => $this->roles_map[$role],
                    'google_id' => $socialUser->getId(),
                ]);
            }
        }

        // Log the user in
        Auth::login($user);

        return redirect()->route('home'); // Change to your home route
    }


}
