<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->is_banned) {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Your account is banned.');
            }

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'agent') {
                return redirect()->route('agent.dashboard');
            } else {
                return redirect()->route('student.dashboard');
            }
        }
    }

    public function updateRole(Request $request, $id) {
        $request->validate([
            'role' => 'required|in:admin,agent,user',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User role updated successfully.');
    }

    public function BanUser($id) {
        $user = User::findOrFail($id);
        $user->is_banned = true;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User banned successfully.');
    }

    public function UnbanUser($id) {
        $user = User::findOrFail($id);
        $user->is_banned = false;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User unbanned successfully.');
    }
    
    public function LogOut(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been successfully logged out.');
    }

}
