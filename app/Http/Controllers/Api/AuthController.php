<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(AuthRequest $request)
    {
        if ($this->isUserExist($request->email)) {
            return response()->json(['code' => 400, "message" => 'User already taken']);
        }

        $validated = $request->validated();
        $validated['password'] = Hash::make($request->password);

        if ($validated) {
            User::create($validated);
            return response()->json(['code' => 200, "message" => 'Successfully']);
        }

        return response()->json(['code' => 500, "message" => 'Internal Server Error']);
    }

    public function login(Request $request)
    {
        $user = $this->isUserExist($request->email);

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return response()->json([
                    "code" => 200,
                    "message" => "successfully",
                    "data" => $user
                ]);
            }

            return response()->json([
                "code" => 422,
                "message" => "Password is wrong",
            ], 422);
        }

        return response()->json([
            "code" => 422,
            "message" => "User not found",
        ], 422);
    }

    private function isUserExist($email)
    {
        $user = User::select('email', 'name', 'password')->where('email', $email)->first();
        return $user;
    }
}
