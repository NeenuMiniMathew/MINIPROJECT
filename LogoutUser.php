<?php   
   session_start();   
   if(session_destroy())
       {
      header("Location:index.html");
       }
       else
       {
            header("Location:index.html");
       }

?>