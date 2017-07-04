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
     public function create(){
        return view('Notenote.create');
        
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
          return redirect("notes/show");
    }
  
       public function show(){
 
        $posts= User::find(Auth::id())->posts;
        return view('Notenote.show',compact('posts'));
    }
     public function showeach($id){
       $post = Notenote::find($id);
       return view('Notenote.showeach',compact('post'));
    }
    
       public function edit($id){
        $post = Notenote::find($id);
        return view('Notenote.edit',compact('post'));
    }
    
     public function update(Request $request,$id){
        $post = Notenote::find($id);
         $this->validate($request,[
             'body'=>'required',
             'title'=>'required',
             ]);
             $post->body=$request->body;
             $post->title=$request->title;
        $post->save();
        return redirect("/notes/show");
     }
     public function destroy($id){
        $post = Notenote::find($id);
        $post ->delete();
         
        return view('Notenote.destroy',compact('post'));
    }
    }
   

