<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
        <title>Ma page web</title>
         </head>
    <body>
	    <div >
        
            <div class=" world ">           
                <ul>
                     
                        <li style="float:left ;border-right: none;" ><a>Art Gallery</a></li>
                  
                </ul>
                
                <br></br>
                    <h2  class="main-title" > The Art Marketplace !</h2>
                    <p class="main-bucket"> find 10000 of  the most mesmerizing art pieces worldwide  and more  .. </p>
                <br></br>
            </div>

            <div  >

                <form action="register.php" method="POST">
                <label for="uname" class="txt" ><b>Username</b></label>
                    <input type="text" placeholder=" Enter Username" class="txtarea" name="uname" required />
                     <br> </br>

                     <label for="email" class="txt" ><b>Email</b></label>
                    <input type="text" placeholder=" Enter Email" class="txtarea" name="email" required />
                     <br> </br>
                      <label for="psw" class="txt"><b>Password</b></label>
                
          
                      <input type="password"  class="txtarea" placeholder="Enter Password" name="psw" required />  
                        <br> </br>
                        <input  name="Valid" type="submit"  class="buttstyle" value="Register" />
                        
                       </form>
                        </br>
                       <a href="acc.php#home" target="_blank"> <input type="button"  class="buttstyle" value="Go back"> </a>
                    <?php 
                      if(@$_GET['msg']==true)
                        {
                        ?>
                        <div style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px;"><?php echo $_GET['msg'] ?></div>                                
                    <?php
                        }
                    ?>
                <br></br>

                
             </div>


                
         </div>

    </body>
         <footer>
        <div class="about">
                <p  style="text-align: center ;  font-family: Arial, Helvetica, sans-serif ,font-size:26px " > About us :  one of the world’s leading art content providers.</br>Our artists are in front of a world audience all the time , because there are people constantly around the world whoe are looking for art. </br>Available in English.</br>2019. </p>
        </div>
</footer>
</html>