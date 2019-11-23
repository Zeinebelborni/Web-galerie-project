<?php

   session_start();
   require_once('DB_connection.php');

      
   
   if(isset($_POST['add_btn'])) 
   {
      $artiste=htmlentities($_SESSION['art']);
      $categorie=htmlentities( $_SESSION ['cat']);
      $prix=htmlentities( $_SESSION ['p']);
      $size=htmlentities($_SESSION['s']);
      $lien=htmlentities( $_SESSION['li']);
      $username=htmlentities($_SESSION['User']);   
     $sql = "INSERT INTO panier( artiste , categorie , lien , prix , size , username ) VALUES ('$artiste','$categorie','$lien','$prix','$size','$username')";
      if ( mysqli_query($db,$sql));
      {
    
          $_SESSION['added']=true;

         header("location:recherche.php#");
                  
    
                    
        
   }

}

  
?>