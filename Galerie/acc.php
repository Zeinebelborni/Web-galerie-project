<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
        <title>Ma page web</title>
         <script>
        function affiche_login()
        {
            document.getElementById("Login").style.visibility= "visible" ;
        }
        function image(img) {
    var src = img.src;
    window.open(src);
}

          </script>
		  
    </head>
    <body>
	    <div >
        
            <div class=" world ">           
                <ul>
                        <li><a class ="red" href="#Login" onclick="affiche_login()" >Login</a></li>
                        <li><a class="yellow" href="#Home"  >Home</a></li>
                        <li style="float:left ;border-right: none;" ><a>Art Gallery</a></li>
                  
                </ul>
                
                <br></br>
                    <h2  class="main-title" > The Art Marketplace !</h2>
                    <p class="main-bucket"> find 10000 of  the most mesmerizing art pieces worldwide  and more  .. </p>
                <br></br>
        
                
         </div>
            <div id="Home" class ="contenu" >
           
                   
                    <div class="gallery"  >
                           
                    <br></br>
                    <br></br>
                            <a target="_blank" href="#" > <img src="tab1.jpg"   width="600" height="400" USEMAP="#Map"  onclick="image(this)"></a>
                            <a target="_blank" href="#"  ><img src="tab2.jpg" width="500" height="400"  USEMAP="#Map"  onclick="image(this)"></a>
                            
                            <a target="_blank" href="#" ><img src="tab3.jpg"  width="500" height="400" USEMAP="#Map"  onclick="image(this)"></a>
                
                            
                    </div>
                    
            </div>

         
               
          <div id="Login"   style="visibility: hidden" class="contenu position-log " >
             <form action="login.php" method="POST">
                     <label for="uname" class="txt" ><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" class="txtarea" name="uname" required />
                     <br> </br>
                      <label for="psw" class="txt"><b>Password</b></label>
                
          
                      <input type="password"  class="txtarea" placeholder="Enter Password" name="psw" required />  
                        <br> </br>
                             <input  name="btn_login" type="submit"  class="buttstyle" value="Login" />
                           

                       <br> </br>
                      <br> </br>
                      </form> 

                      <form action="Create-acc.php" method="POST">   
                        <label for="nouvcompt" class="txt" ><b> You don't have un account ?! ?! </b></label>
                          <br> </br>
                       <input  name="create_new" type="submit"  class="buttstyle" value="Create an account">
                 </form> 
           </div>

          
         
          <?php 
                      if(@$_GET['Empty']==true)
                        {
                        ?>
                        <div style="font-family: Lato; font-size: 24px; text-align:center ; "><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
           </div>     
     
                
    </body>
	<footer>
        <div class="about">
                <p  style="text-align: center ;  font-family: Arial, Helvetica, sans-serif ,font-size:26px " > About us :  one of the world’s leading art content providers.</br>Our artists are in front of a world audience all the time , because there are people constantly around the world whoe are looking for art. </br>Available in English.</br>2019. </p>
        </div>
</footer>
</html>