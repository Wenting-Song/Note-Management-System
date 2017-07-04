@extends('layouts.master')

@section('content')

  <div style="height:50px;">
      <div style="width:400px;">
         <!--<img src="notes.png" alt="Note Icon width" style="float:left;width:100px;height:100px;">-->
        <div style="float: left; width: 130px"> 
         
         
         
         <a role="button" class="btn btn-primary" href="{{action('NotenoteController@create')}}">+New Note</a>
        
        </div>
              
        <div style="float: right; width: 225px;margin-bottom:10px;"> 
         <a role="button" class="btn btn-primary" href="{{action('SessionsController@destroy')}}">Log out</a>
        
        
              
        </div>
          
    </div> 
</div>
    

   
 <div class="col-sm-8 blog-main">
   @foreach ($posts as $post)
    
  
    <div class="blog-post">
     
<div class="blog-post">
    <h2 class = "blog-post-title">
        <a href="/users/{{$post->id}}">
                 {{ $post->title}}
        </a>
    </h2>
    <p class ="blog-post-meta">
        
        Created by {{ $post->user->name}} on
        {{ $post->created_at->toDayDateTimeString()}}<a href="#"></a> 
        <a href="/{{$post->id}}/edit">[ edit</a> / <a href="{{url('destroy',
            [$post->id])}}">delete</a> ]
        
        
    </p>
    
    
    <div class="list-group-item">
    {{ $post->body}}
   </div>
    
    
</div>
    
    
    
</div>
    
   @endforeach
   
    
    
    
</div>

 




@endsection
 


