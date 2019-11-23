
<?php

   session_start();
   require_once('DB_connection.php');

      
   
   if(isset($_POST['btn_login'])) 
   {
      // username and password sent from form 
      if(empty($_POST['uname']) || empty($_POST['psw']))
      {
           header("location:acc.php?Empty= fill ");
      }
      else
      {
          $sql = "SELECT * FROM user WHERE username = '".$_POST['uname'] ."' and psw='".$_POST['psw']."'";
             $result = mysqli_query($db,$sql);
             if (mysqli_fetch_assoc( $result))
             { 
               $_SESSION['logged']=true ;
               $_SESSION['User']=$_POST['uname'];
                  header("location:welcome.php#Home");

                  }


          else 
               {   
                    
                    header("location:acc.php?Empty=username or password invalid ");
    
                       }
         }
    }


  
?>