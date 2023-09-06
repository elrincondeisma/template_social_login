<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    //
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();

    }
    public function callback($provider){
        $userGoogle = Socialite::driver($provider)->stateless()->user();
        $user = User::updateOrCreate([
            'email' => $userGoogle->email
            ],
            [
                'name' => $userGoogle->name,
                'avatar_url' => $userGoogle->avatar,
                'password' => $userGoogle->email
            ]
        );

        
        Auth::login($user);
        return redirect('/dashboard');
    }

    
    
}
