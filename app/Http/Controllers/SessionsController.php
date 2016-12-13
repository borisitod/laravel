<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //
    public function create(){
        return view('sessions.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email'=>'required|email|max:255',
            'password'=>'required'
        ]);

        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($credentials, $request->has('remember'))){
            session()->flash('success', 'Welcome back');
            return redirect()->route('users.show', [Auth::user()]);
        }else{
            sessions()->flash('danger', 'Sorry, You email or password is wrong.');
            return redirect()->back();
        }

        return;
    }

    public function destroy(){
        Auth::logout();
        session()->flash('success', 'You are logout successfully');
        return redirect('login');
    }
}
