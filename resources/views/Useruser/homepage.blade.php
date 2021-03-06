@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Note Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>
    @section('content') 
    
    <section class="jumbotron text-center">
      <div class="container">
          <h1><a class="nav-link active" href="/notes/show">My Notes</a></h1>
          <a href="/notes/create"><img src="notes.png"  alt="note" style="width:304px;height:228px;"></a>
        
      </div>
    </section>


    @endsection
      
    
    @section('footer')
      <script src ="/js/file.js"></script>
    @endsection
      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
    
<script src="/js/file.js">
</script>
</html>
 


