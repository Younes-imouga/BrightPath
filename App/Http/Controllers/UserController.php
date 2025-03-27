<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showRegister(){
        return view('public.Auth.signup');
    }

    public function showLogIn(){
        return view('public.Auth.login');
    }    

    public function showAbout(){
        return view('public.about');
    }   
    
    public function showCourses(){
        return view('public.courses');
    }

    public function LogOut(){
        
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!validator::validateEmail($request->email)) {
            return redirect()->back()->with('error', 'Email already exists');
        }
        if (!validator::validateUsername($request->name)) {
            return redirect()->back()->with('error', 'Username already exists');
        }
        if (!validator::validatepassword($request->password)) {
            return redirect()->back()->with('error', 'Password must be at least 8 characters');
        }
        
        $user = new User();
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $firstUser = User::first();
        if(!$firstUser){
            $user->role = 'admin';
        } else {
            $user->role = 'user';
        }

        $user->save();
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if(!$user){
            return redirect()->back()->with('error', 'Invalid email');
        }
        if(!Hash::check($request->password, $user->password)){
            return redirect()->back()->with('error', 'Invalid password');
        }

        if($user->role == 'admin'){
            return redirect()->route('admin.admindashboard');
        } elseif($user->role == 'agent'){
            return redirect()->route('agent.agentdashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    }
}
