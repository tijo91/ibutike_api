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

        // $headers_array = [];
        // array_push($headers_array,'Content-Type','application/json; charset=UTF-8');
        // array_push($headers_array,'authorization','Basic');
        // array_push($headers_array,'Access-Control-Allow-Origin', '*');
        // array_push($headers_array,'Access-Control-Allow-Methods', 'POST');
        // array_push($headers_array,'Access-Control-Allow-Headers', 'X-Auth-Token');

        // // return response($request,200,$headers_array);

        // return response()->json('allo',200,$headers_array);

        // $headers_array = [];
        // array_push($headers_array,'Content-Type','application/json');
        // array_push($headers_array,'authorization','Basic');
        // array_push($headers_array,'Access-Control-Allow-Origin', '*');
        // array_push($headers_array,'Access-Control-Allow-Methods', 'POST');
        // array_push($headers_array,'Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
        $user = User::where('username',$request->username)->first();
        // $token = $user->createToken(time())->plainTextToken.' : this is token';
        // return \response($token,200,$headers_array);



        if($user==null || !Hash::check($request->password,$user->password)){

            return response('The credentials are not correct',400);

        }else{


            $data = collect();
            $body = collect();
            $headers_collect = collect();
            $headers_array = [];

            $token = $user->createToken(time())->plainTextToken;//Hash::make(time());
            // return response($token);
            $body->put('token',$token);
            $body->put('fullname',$user->first_name.' '.$user->last_name);
            $body->put('email',$user->email);

            // $content->put('body',session()->all());

            $headers_collect->put('Content-Type','application/json');
            $headers_collect->put('authorization','Basic');
            $headers_collect->put('Access-Control-Allow-Origin', '*');
            $headers_collect->put('Access-Control-Allow-Methods', 'POST');
            $headers_collect->put('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');


            array_push($headers_array,'Content-Type','application/json');
            array_push($headers_array,'authorization','Basic');
            array_push($headers_array,'Access-Control-Allow-Origin', '*');
            array_push($headers_array,'Access-Control-Allow-Methods', 'POST');
            array_push($headers_array,'Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');


            $data->put('body',$body);
            $data->put('headers',$headers_collect);
            // $data->put('statusCode',200);
            // return response()->json($content);
            // $statusCode->put('statusCode',200);
            return response($data,200,$headers_array);

        }
    }


}
