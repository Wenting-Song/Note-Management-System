<?php
include("welcome.php");
?>
     
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="create.css">
    </head>
<body>
    
    
    
    
    
    
    
    
    
      <div class="container">
         
             <form action ="save.php" method ="post">
            <!--<div class="col-xs-4">-->
               <input type="text" name="notetitle" class="form-control" placeholder="Note Title" style="width: 40%; font-size: 18px;margin-top:10px; margin-left:150px;">
                 <textarea style="width: 80%; font-size: 18px;margin-top:20px; margin-left:150px; line-height: 18px; z-index: auto; position: relative; -webkit-transition: none; transition: none;  background: url(line.png)
                 no-repeat center center fixed; background-size: 100% 100%;" name="notecontent" class="form-control textarea" id="edit_textarea"  placeholder="Write your note here..." tabindex="2" rows="19" spellcheck="true"></textarea>
                 
        
               <button type="submit" class="btn btn-info" style="margin-left:150px;">Save</button>
               <!--<input type="button" class="btn btn-info" value="cancel" id="btnSaveNote" onclick="fnSaveNote();" tabindex="3" style="width: 6%; font-size: 18px;margin-top:20px; margin-left:10px;">-->
            
          </form>
          <form action="welcomeshow.php" method="post"><input type="submit" class="btn btn-info" value="Cancel" style=margin-left=5px/></form>
    </div>
   

                 
        
    
    
     
   </body>
    </html>
