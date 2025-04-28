<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Reclamation;

class AdminController extends Controller
{
    public function showAdmin(){
        return view('admin.dashboard');
    }

    public function showUsers(){
        $users = \App\Models\User::all();
        return view('admin.users', compact('users'));
    }

    public function showReclamations(){
        return view('admin.reclamations');
    }

    public function respondReclamation($id)
    {
        $reclamation = Reclamation::with('user')->findOrFail($id);
        return view('admin.respondReclamation', compact('reclamation'));
    }

    public function submitReclamationResponse(Request $request, $id)
    {
        $request->validate([
            'response' => 'required|string|max:2000',
        ]);
        $reclamation = Reclamation::findOrFail($id);
        $reclamation->response = $request->response;
        $reclamation->status = 'resolved';
        $reclamation->save();

        return redirect()->route('admin.reclamations')->with('success', 'Response sent and reclamation marked as resolved.');
    }
}
