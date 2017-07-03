<?php
   // Create connection
     
     $link = mysqli_connect("localhost", "php24sql", "sss@138341","email");
        session_start();
   
   // Check connection
     if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   // Attempt insert query execution
      $usertitle = mysql_real_escape_string($_POST['notetitle']);
      $userwords = mysql_real_escape_string($_POST['notecontent']);

      //$query= "INSERT INTO notes(title, words)
              //(SELECT id,email FROM user
              //WHERE user.id=notes.note_user)
             // VALUES ('$usertitle','$userwords')";

    $query_id="Select id from user where user.email='".$_SESSION['login_email']."'";
    $result_id = mysqli_query($link,$query_id)or die(mysqli_error($link)) ;
     $user_id;
     while($gear = mysqli_fetch_array( $result_id )){
           $user_id=$gear['id'];
         }
$sDate = date("Y-m-d H:i:s"); // 2015-04-07 07:12:51

      
      $query = "INSERT INTO notes(title,words,note_user,date) values('$usertitle','$userwords','$user_id','$sDate')";
        //$query = "INSERT INTO notes (title,words,note_user) VALUES ('$usertitle','$userwords',//(select id from user where user.email=".$_SESSION['login_email']."))";
      //$result = mysqli_query($link,$query);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      
   if(mysqli_query($link, $query)){
      echo "Records inserted successfully.";
   } else{
      echo "ERROR: Could not able to execute . " . mysqli_error($link);
   }
   
     
   ?>
