<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class SessionsController extends Controller
{   
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }
    
    public function create(){
        return view('sessions.create');
        
    }
    
 
      public function postLogin(Request $request) {

          $this->validate($request, [
               'email' => 'required',
         
                   'password'  => 'required',
           ]);
          
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                 return redirect()->home();
          }
              else {
        echo "fail!";

              }
}



    
 public function destroy(){
        auth()->logout();
        return redirect()->home();
        
        
    }
    
}
