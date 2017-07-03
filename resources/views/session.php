<?php
   include('connect.php');
   session_start();// Starting Session
   
   $user_check = $_SESSION['login_email']; // Storing Session
   
   //SQL Query To Fetch Complete Information Of User
   $ses_sql = mysqli_query($con,"select email from user where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   //print_r($_SESSION);
   
   if(!isset($_SESSION['login_email'])){
      header("location:lesson2e.php");
   }

?>
