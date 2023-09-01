<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $request) {
        $fields = $request->validated();

        $fields['role_id'] = Role::customer()->first()->id;

        $user = User::create($fields);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response(json_encode($response), 201);
    }

    public function login(LoginRequest $request)
    {
        $fields = $request->validated();

        // Trying to get user
        $user = User::where('email', $fields['email'])->first();

        // Check user and his password
        if(!$user || !Hash::check($fields['password'], $user->password)){
            return response(json_encode([
                'message' => 'Incorrect email or password'
            ]), 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response(json_encode($response));
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        $response = [
            'message' => 'Logged out'
        ];

        return response(json_encode($response));
    }
}
