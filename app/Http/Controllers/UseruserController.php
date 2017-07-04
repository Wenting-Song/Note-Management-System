<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Useruser;

class UseruserController extends Controller
    
{
     public function home(){
        return view('Useruser.homepage');
        
    }
    public function index(){
        
        return view('Useruser.index');
        
    }
    /* public function show(){
        return view('Useruser.show');
        
    }*/
   public function create(){
        return view('Useruser.create');
        
    }
  /* public function auth(){
        return view('Useruser.welcome');
        
    }
*/
 
}
