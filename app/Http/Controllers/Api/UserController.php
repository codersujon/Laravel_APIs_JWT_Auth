<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * User Register (POST, formdata)
     */
    public function register(StoreUserRequest $request){

    }

    /**
     * User Login (POST, formdata)
     */
    public function login(Request $request){

    }

    /**
     * User Profile (GET)
     */
    public function profile(){

    }

    /**
     * To Generate User Refresh Token Value
     */
    public function refreshToken(){

    }

     /**
     * User Logout (GET)
     */
    public function logout(){

    }
}
