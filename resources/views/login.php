<?php 

   include("connect.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST"){
       //email and password sent from form
      
       $myemail = mysqli_real_escape_string($con,$_POST['email']);
       $mypwd = mysqli_real_escape_string($con,$_POST['pwd']);
       $sql = "SELECT id FROM user WHERE email = '$myemail' and pwd = '$mypwd'";
       $result = mysqli_query($con,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       //$active = $row['active'];
      
       $count = mysqli_num_rows($result);
      
       // If result matched $myusername and $mypassword, table row must be 1 row
		
       if($count == 1) {
         //session_register("myemail");
         //session_register("mypwd");
         $_SESSION['login_email'] = $myemail;
       
          header("location: welcomeshow.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "Login Failed!!!" ;
      }
   }

?>