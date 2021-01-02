<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
       $loginD= ['email'=>$request->email ,'password'=>$request->password ];

       if(Auth::attempt($loginD)){
           $user= Auth::userr();
           $token = $user->createToken('Token NAme')->accessToken;
            
       }
       return response([
        'status'=>'error',
        'massege'=>'invalid'
        

       ]);
    }


}
