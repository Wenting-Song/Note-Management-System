@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
   
   @foreach ($posts as $post)
    
  
    <div class="blog-post">
     @include('Notenote.post')
    
    
    
</div>
    
   @endforeach
   
    
    
    
</div>
@endsection
 
