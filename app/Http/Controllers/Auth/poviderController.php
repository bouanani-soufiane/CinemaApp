<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class poviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            dd($user);
        } catch (Exception $e) {
          
            return redirect('/')->with('error', 'Erreur lors de l\'authentification avec GitHub.');
        }
    }

}