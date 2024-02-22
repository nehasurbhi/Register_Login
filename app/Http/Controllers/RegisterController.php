<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
            
        ]);

        $data = $request->all();
        // dd($data);
            // return $data ;
        $register = Register::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'confirmPassword' =>bcrypt($request->input('confirmPassword')),
        ]);

        return response()->json(['message' => 'User Registered successfully']);
      
    }

    public function signin(Request $request)
    {

        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Retrieve user data based on the provided email
        $register = register::where('email', $request->email)->first();

        if ($register) {
            // Compare the provided password with the hashed password in the database
            if (password_verify($request->password, $register->password)) {
                // Authentication successful
                return 'success';
            }
        }
        return 'failure';
    }
}
