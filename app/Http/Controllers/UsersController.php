<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',[
            'only'=>['index', 'edit', 'update','destroy']
        ]);
    }

    public function index(){
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function show($id){
        $user = User::findOrFail($id);
        $this->authorize('update',$user);
        return view('users.show', compact('user'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:50',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        Auth::login($user);
        session()->flash('success', 'Thank you for registering with us.');
        return redirect()->route('users.show', [$user]);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'name'=>'required|max:50',
            'password'=>'confirmed|min:6'
        ]);

        $user = User::findOrFail($id);
        $this->authorize('update',$user);

        $data = array_filter([
            'name'=>$request->name,
            'password'=>$request->password,
        ]);
        $user->update($data);

        session()->flash('success', 'Update successfully');

        return redirect()->route('users.show', $id);
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $this->authorize('destroy', $user);
        $user->delete();
        session()->flash('success', 'Delete user successfully');
        return back();
    }
}
