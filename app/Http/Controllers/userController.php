<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Psy\Util\Json;

class userController extends Controller
{
    public function getMessage():JsonResponse
    {
        return response()->json(["msg" => "hello new user!"]);
    }
    public function getHelloUser() :JsonResponse
    {
        return response()->json(["msg"=>"hello User!"]);
    }
    public function hour() :JsonResponse
    {
        return response()->json(["hour"=>Carbon::today()->toString()]);
    }
}
