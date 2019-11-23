<?php

   session_start();
   require_once('DB_connection.php');

      
   
   if(isset($_POST['delete_btn'])) 
   {
      $artiste=htmlentities($_SESSION['art']);
      $username=htmlentities($_SESSION['User']);   
     $sql = "DELETE FROM panier WHERE artiste='$artiste' AND username='$username' ";
       if(mysqli_query($db,$sql))
      {
    
          $_SESSION['deleted']=true;

         header("location:recherche.php");
                  
    
                    
        
   }

}

  
?>