<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Status;
use Illuminate\Support\Facades\Auth;

class StaticPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
            'only'=>['home']
        ]);

        $this->middleware('guest',[
            'only'=>['help','about']
        ]);
    }

    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
            $user =  Auth::user();
        }
        $users = $user->followings()->paginate(30);
        $home_users = $users->sortby('created_at')->take(2);
      return view('static/home', compact('feed_items','user','home_users'));
        //return view('static/home');

    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }
}