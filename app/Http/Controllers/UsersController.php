<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',[
            'only'=>['index', 'edit', 'update','destroy', 'followings', 'followers']
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
        $statuses = $user->statuses()
            ->orderBy('created_at', 'desc')
            ->paginate(30);
        return view('users.show', compact('user', 'statuses'));
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

        $this->sendEmailConfirmationTo($user);
        session()->flash('success', 'Please check your email to activate your account.');
        return redirect('/');
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

        return redirect()->route('home');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $this->authorize('destroy', $user);
        $user->delete();
        session()->flash('success', 'Delete user successfully');
        return back();
    }

    public function confirmEmail($token){
        $user = User::where('activation_token', $token)->firstOrFail();

        $user->activated = true;
        $user->activation_token = null;
        $user->save();

        Auth::login($user);
        session()->flash('success', 'Activate successfully.');
        return redirect()->route('users.show', [$user]);
    }

    protected function sendEmailConfirmationTo($user){
        $view = 'emails.confirm';
        $data = compact('user');
        $from = 'laravel@laravel-app.com';
        $name = 'Admin';
        $to = $user->email;
        $subject = "Thanks for registering your account, please confirm your email.";

        Mail::send($view, $data, function ($message) use ($from, $name, $to, $subject) {
            $message->from($from, $name)->to($to)->subject($subject);
        });
    }

    public function followings($id)
    {
        $user = User::findOrFail($id);
        $users = $user->followings()->paginate(30);
        $title = 'Follow';
        return view('users.show_follow', compact('users', 'title'));
    }

    public function followers($id)
    {
        $user = User::findOrFail($id);
        $users = $user->followers()->paginate(30);
        $title = 'Followers';
        return view('users.show_follow', compact('users', 'title'));
    }

}
