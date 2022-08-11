<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interests;
use App\Models\Languages;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()){

            $language = Languages::all();
            $interest = Interests::all();

            return view('user_register',compact('language','interest'));
        }else{
            return view('auth.login');
        }

    }
}
