<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class LoginController extends Controller
{
    //

    public function login(Request $request){

        // $credentials = $request->validate([
        //     'username'=>['required'],
        //     'password'=>['required']
        // ]);
        $user = User::where('username',$request->username)->first();

        // return \response()->json($user);

        // if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
        //     return response()->json('okay');
        if(Hash::check($request->password,$user->password)){

            // $auth = Auth::user();

            Session::start();

            session()->put('token',session('_token'));
            session()->forget('_token');
            session()->put('email',$user->email);
            session()->put('full_name',$user->first_name.' '.$user->last_name);
            // $content = collect();

            // $content->put('body',session()->all());

            // $headers = collect();

            // $headers->put('Content-Type','application/json');
            // $headers->put('authorization','application/json');

            // $content->put('headers',)

            // return response()->json($content);

            return response()->json(session()->all());

        }else{

            return response()->json('The credentials are not correct');

        }
    }


}
