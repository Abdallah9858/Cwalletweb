<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|string',
        ]);

        // Return validation errors if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        // Return the created user information
        return response()->json($user, 201);
    }
}
