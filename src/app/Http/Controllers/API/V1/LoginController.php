<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\V1\LoginAuthenticationRequest;

class LoginController extends Controller
{
    public function authenticate(LoginAuthenticationRequest $request)
    {
    	if (!auth()->attempt($request->validated())) {
    		return response()->json(null, 401);
    	}

        $token = auth()->user()->createToken('app');

        return response()->json([
    		'data' => [
                'token' => $token->plainTextToken
            ]
    	], 200);
    }
}
