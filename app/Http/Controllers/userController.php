<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
     public function getUser() : Response
    {
        return response()->json(["msg"=>"hello"]);
    }
}
