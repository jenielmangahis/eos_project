<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zones;
use App\Houses;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $houses = Houses::where('user_id',$userId)->orderBy('id', 'desc')->get();
        $zones  = Zones::where('user_id','=',$userId)->orderBy('id', 'desc')->get();
        return view('home',compact('houses','userId','zones'));
    }
}
