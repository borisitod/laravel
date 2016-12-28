<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',[
            'only'=>['edit','update']
        ]);

        $this->middleware('guest',[
            'only'=>['create']
        ]);
    }

    public function create(){
        return view('sessions.login');
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
            if(Auth::user()->activated)
            {
                session()->flash('success', 'Welcome back');
                //return redirect()->intended(route('home', [Auth::user()]));
                return redirect()->intended(route('home'));
            }else{
                Auth::logout();
                session()->flash('warning', 'Your account has not been activated yet, please check your email');
                return redirect('/');
            }

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
