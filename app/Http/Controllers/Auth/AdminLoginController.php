<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

   //setup my middleware
    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }
    public function login(Request $request){
      //validate the form date_add
      $this->validate($request,[
      'email' => 'required|email',
      'password' =>' required|min:6'
      ]);

      //attemp to log the user in
      if(Auth::guard('admin')->attempt([
          'email' => $request->email,
          'password' => $request->password],
          $request->remember)) {

              // if successful then redirect to thier intended location
              return redirect()->intended(route('admin.dashboard'));
      } //end if

      //if unsuccesfull , then redirect back to the login form with the form data
      return redirect()->back()->withInput($request->only('email'));




    }
}
