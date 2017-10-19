<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;


class SocialAuthController extends Controller
{
  public function redirect()
  {
      return Socialite::driver('google')->redirect();
  }

  public function callback(Request $request)
  {
      $providerUser = Socialite::driver('google')->user();

      $user = User::where("email", $providerUser->email)->first();

      if (!$user) {
        $user = new User();
        $user->email = $providerUser->email;
        $user->name = $providerUser->name;

        $user->save();
      }
      
      auth()->login($user);

      return redirect("/login");
  }
}
