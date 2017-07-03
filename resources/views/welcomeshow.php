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
    <body>
          <?php  
        
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$con = mysqli_connect("localhost", "php24sql", "sss@138341","email") or  
die("Could not connect: " . mysql_error());  
        $query_id="Select id from user where email='".$_SESSION['login_email']."'";
      
        $result_id = mysqli_query($con,$query_id)or die(mysqli_error($con)) ;
        $user_id;
        while($row = mysqli_fetch_array($result_id )){
           $user_id=$row['id'];
         }
    $query = "select title,words,date from notes WHERE notes.note_user IN (SELECT user.id 
  FROM user WHERE user.id = '$user_id')";
        $result = mysqli_query($con,$query)or die(mysqli_error($con)) ;
      
       
  
while ($gear = mysqli_fetch_array($result)) {
    echo "<p style='color:red;'>"."Title:"."  ".$gear['title']." (created by ".$_SESSION['login_email']." ".$gear['date']." [ edit / delete ]</p>";
    echo "<p style='color:red;'>"."Note:"." ".$gear['words']."</p>";
//echo $gear['title']."  ".$gear['words'];
}
        ?>
    </body>
</html>
   
     