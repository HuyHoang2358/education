<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    private $roles_map = [
        'student' => 1,
        'teacher' => 2,
        'parent' => 3,
        'ctv' => 4,
        'admin' => 5
    ];

    public function showLoginForm()
    {
        return view('auth.log_in');
    }

    public function showSignOnForm()
    {
        return view('auth.sign_on');
    }

    public function signon(Request $request){

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'role' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
            'terms' => 'accepted',
        ], [
            'role.required' => 'Vai trò không được để trống.',
            'name.required' => 'Tên là bắt buộc.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email phải đúng định dạng.',
            'email.unique' => 'Email này đã được sử dụng.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.confirmed' => 'Mật khẩu không khớp.',
            'terms.accepted' => 'Bạn phải đồng ý với điều khoản.',
        ]);

        // If validation fails, redirect back with errors & old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => $this->roles_map[$request->input('role')],
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to the home page or any other page
        return redirect()->route('home')->with('success', 'Account created successfully.');

    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        //Thay cach check role
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->role_id == '1') {
                return redirect()->route('home');
            } else if($user->role_id == '2'){
                return redirect()->route('admin.dashboard');
            }
        }

        return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng.')->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}