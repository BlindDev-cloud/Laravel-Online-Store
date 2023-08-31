<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $request) {
        $fields = $request->validated();

        $salt = Str::random();
        $fields['password'] = \hash('sha256', $fields['password'] . $salt);
        $fields['role_id'] = Role::customer()->first()->id;

        $user = User::create($fields);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response);
    }

    public function login(Request $request) {
    }

    public function logout(Request $request) {
    }
}
