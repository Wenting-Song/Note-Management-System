
@extends('layouts.master')
@section('editId',$post->id)
@section('editMethod')
{{ method_field('PUT')}}


@section('content')
<div class="col-sm-8 blog-main">
     <h1>Edit a Note</h1>
<form method="POST" action="/notes/@yield('editId')">
    {{ csrf_field() }}
    
    {{ method_field('PUT')}}
    
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo $post->title?>" id="exampleInputNote" required>
  </div>
    
  <div class="form-group">
    <label for="exampleInputPassword">Note</label>
    <textarea id="body" name="body" class="form-control" value="<?php echo $post->title?>"  placeholder="Write your note here..." required><?php echo $post->body ?></textarea>
  </div>
  
<div class="form-group">
  <button type="submit" class="btn btn-primary">Save</button>
</div>
        
@include('layouts.errors')
</form>
    
    
    
    
    
</div>




@endsection

