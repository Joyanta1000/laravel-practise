<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('github')->redirect();
    }
    public function loginWithFacebook()
    {
        try {
    // dd('oi');
            $user = Socialite::driver('github')->user();
            // dd($user);
            $isUser = User::where('fb_id', $user->id)->first();

            // dd($isUser);
     
            if($isUser){
                Auth::login($isUser);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);
    
                Auth::login($createUser);
                return redirect('/home');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
