<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class FacebookSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFB()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->route('home', app()->getLocale())
                    ->with('message', 'logged in successfully');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'facebook',
                    'password' => encrypt('my-facebook')
                ]);

                Auth::login($newUser);

                return redirect()->route('home', app()->getLocale())
                    ->with('message', 'logged in successfully');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
