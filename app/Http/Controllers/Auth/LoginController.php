<?php

namespace mecanica\Http\Controllers\Auth;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use mecanica\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function login()
    {
        // grab credentials from the request
        $credentials = Input::only('login', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return Response::json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return Response::json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return Response::json(compact('token'));
    }
}
