<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialtie;
use App\Models\User;
use Auth;

class UserController extends Controller
{
   public function login(){
    return view('auth.user.login');
   } 
   
   public function google(){
    $callback = Socialite::driver('google')->stateless()->user();
    $data = [
        'name' => $callback->getName(),
        'email' => $callback->getEmail(),
        'avatar' => $callback->getAvatar(),
        'email_verified_at' => date('Y-m-d H:i:s', time()),
    ];

    // return $data;

    $user = User::firstOrCreate(['email' => $data['email']], $data);
    Auth::login(route('welcome'));

    }
}
