<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class poviderController extends Controller
{
    public function redirect()
    {

        return Socialite::driver('google')->redirect();
    }

            public function callbackgoogle()
            {
                try {
                    $google_user = Socialite::driver('google')->user();
        
        
                    $user = User::where('google_id', $google_user->getId())->first();
                    if (!$user) {
        
                        $newuser = User::create([
                            'name' => $google_user->getName(),
                            'email' => $google_user->getEmail(),
                            'google_id' => $google_user->getId(),
                        ]);
        
                        Session::put('user_role', $newuser->id);
        
                        return redirect()->route('role');
                    } else {
                        Auth::login($user);
                    
        
                        return redirect('/');
                    }
                } catch (Exception $e) {
        
                    return redirect('/')->with('error', 'Erreur lors de l\'authentification avec GitHub.');
                }
            }
        }
 