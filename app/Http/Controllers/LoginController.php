<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login(Request $request){

        return response()->json(/*'This the username : '.*/$request->user_name);

        // if(!Auth::check()){

        // }else{

        // }
    }
}
