<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //


    public function index(Request $request)
    {
        return "Hello World";
    }

    public function getAllUser(Request $request)
    {
        return "Get All User";
    }
}
