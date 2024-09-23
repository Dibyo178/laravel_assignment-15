<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    //index method decleare

     public function index($id){

        //  Decleare the variable with values

         $name= "Donal Trump";

         $age="75";

          // Store the $id, $name, and $age in the $data associative array

         $data=[

             'id' => $id,
            'name' => $name,
            'age' => $age


         ];



        // Set the cookie with the specified attributes
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1; // 1 minute for the cookie expiry
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];  // Use request()->getHost() instead of $_SERVER['SERVER_NAME']
        $secure = false;
        $httpOnly = true;

        // create the cookie

         $cookie = Cookie::make($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);

           // Return the data as a response with status code 200 and the cookie

            return response()->json($data,200)->cookie($cookie);





     }
}
