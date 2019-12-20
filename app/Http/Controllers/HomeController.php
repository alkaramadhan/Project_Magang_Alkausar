<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\User;
use Auth;
use App\Wishlist;
use DB;

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
        $tampil = Produk::all();
        $usr = User::all();
        return view('home')->withTampil($tampil)->withUsr($usr);
    }

   
    public function users()
    {
        $users = User::get();
        return view('alluser', compact('users'));
    }

    public function user($id)
    {
        $user = User::find($id);
        return view('usersView', compact('user'));
    }

    public function ajaxRequest(Request $request){
        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);
        return response()->json(['success'=>$response]);
    }

    

}
