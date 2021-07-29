<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ChangeController extends Controller
{
    public function index(){
        return view('Admin/change',[
            'error'=>null,
        ]);
    }

    public function update(Request $request){
        if (!(Hash::check($request->get('OldPass'), Auth::user()->password))) {
            return Redirect::back()->withErrors([' Your current password does not matches with the password you provided.','This is wrong']);
        }
        if(strcmp($request->get('OldPass'), $request->get('password')) == 0){
            return Redirect::back()->withErrors([' New Password cannot be same as your current password.','This is wrong']);
        }
        $validatedData = $request->validate([
            'OldPass' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return redirect('/admin');
    }
}
