<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index(){
        return ['name' => 'Ashish'];
    }
    function show (){
        echo '<h1>Hello ashish</h1>';
    }
}
