<?php
   include('session.php');
   
   ?>
<html>
   <head>
      <title>Your Note Page</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="note.css">
   </head>
   <h1>Welcome <?php echo $login_session; ?></h1>
   <h3>
      <div style="width:400px;">
         <!--<img src="notes.png" alt="Note Icon width" style="float:left;width:100px;height:100px;">-->
          <div style="float: left; width: 130px"> 
         <form action ="create.php" method ="post">
         <button type="submit" class="btn btn-primary">+New Note</button>
         </form> 
              </div>
    <div style="float: right; width: 225px;margin-bottom:30px;"> 
          <form action ="logout.php" method ="post">
         <button type="submit" class="btn btn-primary" style="margin-bottom:5px;">Log Out</button>
         </form> 
        </div>
       </div>
    
   </h3>
</html>
     
  