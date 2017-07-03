<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notenote;
use App\User;
use DB;
use Auth;

class NotenoteController extends Controller
{    
     public function __construct(){
         $this->middleware('auth')->except(['index','show']);
         
     }
    
    
    
     public function store(){
    
        $this->validate(request(),[
            'title' =>'required',
            'body' =>'required'
        
            
        ]);
         
//         auth()->user()->publish(
//             new Notenote(request(['title','body']))
//        );
//      
      Notenote::create([
            'title' => request('title'), 
            'body' => request('body'),
            'user_id' => auth()->id()
            ]);
             
         
             //And then redirect to the home page
          return redirect("/");
    }
  
       public function show(){
//      $posts = DB::table('notenotes')
//    ->where('user_id', Auth::user()->id)
//    ->get();
       //$posts = Notenote::where("id", "=", '1')->get();
     //$posts = Notenote::all();
       //$posts= User::with('notes')->find($id)->notes;   
        $posts= User::find(Auth::id())->posts;
        //$posts = Notenote::find($id);

       
       return view('Notenote.show',compact('posts'));
    }
     public function showeach($id){
       $post = Notenote::find($id);
       return view('Notenote.showeach',compact('post'));
    }
   
}
