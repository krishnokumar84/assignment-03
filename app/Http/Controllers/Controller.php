<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Console\ControllerMakeCommand;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {

    $name = "Donal Trump";
    $age = "75";

    $date = [
        'id' => $id,
        'name' => $name,
        'age' => $age
    ];



    $cookieName ='access_token';
    $cookieValue = '123-xyz';
    $minutes = 1;
    $path = '/';
    $domain = $_SERVER['SERVER_NAME'];
    $secure = false;
    $httpOnly = true;

    $cookie =Cookie::make($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);
    
    return response()->json($data, 200)->cookie($cookie);
    }

}