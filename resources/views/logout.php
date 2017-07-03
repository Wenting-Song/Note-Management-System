<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: lesson2e.php");
   }
?>