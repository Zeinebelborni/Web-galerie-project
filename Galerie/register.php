 <?php

session_start();
 require_once('DB_connection.php');

    
 
 if(isset($_POST['Valid'])) 
 {   $sql = "INSERT INTO user( username , email , psw) VALUES ('".$_POST['uname'] ."','".$_POST['email']."','".$_POST['psw']."')";
   mysqli_query($db, $sql);
   header("location:Create-acc.php?msg=You are now registered ") ;
            
    }
 

        ?>