@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
     <h1>Create a Note</h1>
<form method="POST" action="/users">
    {{ csrf_field() }}
   
    
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputNote" required>
  </div>
    
  <div class="form-group">
    <label for="exampleInputPassword">Note</label>
    <textarea id="body" name="body" class="form-control" placeholder="Write your note here..." required></textarea>
  </div>
  
<div class="form-group">
  <button type="submit" class="btn btn-primary">Save</button>
</div>
        
@include('layouts.errors')
</form>
    
    
    
    
    
</div>

  

@endsection
 