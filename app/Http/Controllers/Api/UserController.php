<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getAccessToken(Request $request)
    {
        $data = $request->all();

        $user = User::where('email', $data['email'])->first();
        \Log::info($user);
        if ($user == null || $user->password != $data['password']) {
            return 'Tai khoan sai roi';
        }
// Creating a token without scopes...
        $token = $user->createToken('Token Name')->accessToken;

        return $token;
    }
}
