<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $tweets = DB::table('tweets')->orderBy('created_at','desc')->get();
        $tweets = Tweet::orderby('created_at','desc')->get();
        // dd($tweet->user);
        // $user = DB::table('users')->find(3);
        return view('home', compact('tweets'));}
}
