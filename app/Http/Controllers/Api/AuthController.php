<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['message' => 'Gagal Masuk'], 401);
        }
        $isValidPassword = Hash::check($password, $user->password);
        if (!$isValidPassword) {
            return response()->json(['message' => 'Gagal Masuk'], 401);
        }

        $token = $user->createToken('fe-token')->plainTextToken;

        $user['token'] = $token;

        return response()->json($user);
    }

    public function register(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response()->json([
            'message' => 'User Was Created',
            'user' => $user,
        ]);
    }
}
