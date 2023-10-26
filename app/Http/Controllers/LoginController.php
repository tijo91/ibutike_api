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
        // $user->createToken();
        // return \response()->json($user);

        // if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
        //     return response()->json('okay');
        if($user || Hash::check($request->password,$user->password)){

            // $auth = Auth::user();

            // Session::start();

            // session()->put('token',session('_token'));
            // session()->forget('_token');
            // session()->put('email',$user->email);
            // session()->put('full_name',$user->first_name.' '.$user->last_name);
            // $content = collect();

            $data = collect();
            $body = collect();
            $headers = collect();

            $token = $user->createToken(time())->plainTextToken;//Hash::make(time());
            // return response($token);
            $body->put('token',$token);
            $body->put('fullname',$user->first_name.' '.$user->last_name);
            $body->put('email',$user->email);

            // $content->put('body',session()->all());

            $headers->put('Content-Type','application/json');
            $headers->put('authorization','Basic');
            $headers->put('Access-Control-Allow-Origin', '*');
            $headers->put('Access-Control-Allow-Methods', 'POST');
            $headers->put('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
            $headers->put('Access-Control-Allow-Origin', 'false');
            // $content->put('headers',)

            $data->put('body',$body);
            $data->put('headers',$headers);

            // return response()->json($content);

            return response($data,200);

        }else{

            return response('The credentials are not correct',400);

        }
    }


}
