<?php

namespace App\Http\Controllers;

use App\Social;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Socialite;
class SocialAuthController extends Controller
{

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $social = Social::where('provider_user_id',$user->id)->where('provider','facebook')->first();
        if($social){
            $u = User::where('email',$user->email)->first();
            Auth::login($u);
            return redirect()->route('home');
        }else{
            $temp = new Social();
            $temp->provider_user_id = $user->id;
            $temp->provider  ='facebook';
            $u=User::where('email',$user->email)->first();
            if(!$u){
                $u= User::create([
                    'name'          => $user->name,
                    'email'         => $user->email,
                    'remember_token'=>$user->token,
                    'role'          => 'member'
                ]);
            }
            $temp->user_id = $u->id;
            $temp->save();
            Auth::login($u);
            return redirect()->route('home');

        }
    }
    public function redirectToProviderGG()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallbackGG()
    {
        $user = Socialite::driver('google')->user();

        $social = Social::where('provider_user_id',$user->id)->where('provider','google')->first();
        if($social){
            $u = User::where('email',$user->email)->first();
            Auth::login($u);
            return redirect()->route('home');
        }else{
            $temp = new Social();
            $temp->provider_user_id = $user->id;
            $temp->provider  ='google';
            $u=User::where('email',$user->email)->first();
            if(!$u){
                $u= User::create([
                    'name'          => $user->name,
                    'email'         => $user->email,
                ]);
            }
            $temp->user_id = $u->id;
            $temp->save();
            Auth::login($u);
            return redirect()->route('home');

        }
    }
}
