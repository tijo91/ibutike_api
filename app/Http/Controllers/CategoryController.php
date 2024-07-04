<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $auth = auth()->user();

        $api_token = $auth->api_token;

        $categories = collect();

        if(auth('sanctum')->check() && auth()->role_id==1){

            $categories = Category::all();
            $data = [
                "message_success"=>"",
                "categories"=>$categories,
                "api_token"=>$api_token
            ];

            return response($data,400);
        }else{
            $data = [
                "message_fail"=>"You are not authorized to access this page",
                "categories"=>$categories,
                "api_token"=>$api_token
            ];

            return response($data,200);
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $auth = auth()->user();

        $api_token = $auth->api_token;

        $categories = collect();

        if($auth->role_id!=1){

            $data = [
                "message_success"=>"",
                "categories"=>$categories,
                "api_token"=>$api_token
            ];

            return response($data,200);

        }else{

            $data = [
                "message_fail"=>"",
                "categories"=>$categories,
                "api_token"=>$api_token
            ];

            return response($data,400);

        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
