
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
        <title>Ma page web</title>
         <script>
        function affiche( x)
        {
            document.getElementById(x).style.visibility= "visible" ;
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
                        <li><a class ="red" href="acc.php#Home" >Logout</a></li>
                        <li><a class ="blue" href="#Mon_panier" onclick="affiche('Mon_panier')" >My basket</a></li>
                        <li><a class ="purple" href="#Chercher" onclick="affiche('Chercher')">Search for art</a></li>
                        <li><a class="yellow" href="#Home"  >Home</a></li>

                        <li style="float:left ;border-right: none;" ><a>Art Gallery</a></li>
                  
                </ul>
                
                <br></br>
                    <h2  class="main-title" > The Art Marketplace !</h2>
                    <p class="main-bucket"> find 10000 of  the most mesmerizing art pieces worldwide  and more  .. </p>
                    <br></br>
                    
                    <p class="main-bucket"><?php
                                        session_start();

                                    if($_SESSION['logged']==true)
                                       {
                                        echo ' WellCome ' . $_SESSION['User'].'<br/>';
                                         
                                                  }
                                     
                                             session_abort()     ?>   </p>
                <br></br>
                
                           
                           
                
         </div>
          

            <div id="Home" class="contenu " >
           
                   
                    <div class="gallery"  >
                           
                    <br></br>
                    <br></br>
                            <a target="_blank" href="#" > <img src="tab1.jpg"   width="600" height="400" USEMAP="#Map"  onclick="image(this)"></a>
                            <a target="_blank" href="#"  ><img src="tab2.jpg" width="500" height="400"  USEMAP="#Map"  onclick="image(this)"></a>
                            
                            <a target="_blank" href="#" ><img src="tab3.jpg"  width="500" height="400" USEMAP="#Map"  onclick="image(this)"></a>
                
                            
                    </div>
                    
            </div>

         
               
          <div id="Chercher"   style="visibility: hidden"  class="contenu position-search "   >

              <div class ="barre_recheche "  >
              <form action="recherche.php" id="searchthis" method="post">
                     <select id="category"  name ="categorie" >
                         <option value  > Categorie </option>
                         <option value="Oil painting" >Oil painting </option>
                         <option value="Charcoal" > Charcoal </option>
                                                </select>

                     <select id="size" name="size" >
                         <option value  > Size </option>
                         <option value="small" >Small </option>
                         <option value="medium" > Medium </option>
                         <option value="large" > Large </option>
                                                </select>
                      <input name="searchbtn" type="submit" value="Search"  class="buttstyle" />

                      
                      
                    

                    </form>
                    
                   </div>
            </div>

                   <div id="Mon_panier"   style="visibility: hidden"  class="contenu position-search "   >

                               
        
        
                         

                                        <div class="liens"  >
                                        <form action="delete.php" method="POST">
                                 
     
                                      <?php

                                         session_start();
                                          require_once('DB_connection.php');



                                                $username=htmlentities($_SESSION['User']); 
                                                 
                                                $sql = "SELECT * FROM panier WHERE username ='$username'";
                                                     $result = mysqli_query($db,$sql);
                                                   if ( $result)
                                                   {     while($tableau=mysqli_fetch_array($result))
                                                              {   
                                                            

                                                               echo" <p><a target='_blank' href='#' > <img src=".$tableau['lien']."   USEMAP='#Map' onclick='image(this)'></a> <br />Artist:". $tableau['artiste'] ."/ Price:" .$tableau['prix']." <input name='delete_btn' type='submit' value='Delete from basket'  class='buttstyle' /><p>";

                                                                    }

                                                        }

                                                       


                                         ?>
                                         </form>

                                        </div>


                               
                               

                </div>
                   

         

         
                                                
             </div>

          
         
             
        
                
    </body>
	<footer>
        <div class="about">
                <p  style="text-align: center ;  font-family: Arial, Helvetica, sans-serif ,font-size:26px " > About us :  one of the world’s leading art content providers.</br>Our artists are in front of a world audience all the time , because there are people constantly around the world whoe are looking for art. </br>Available in English.</br>2019. </p>
        </div>
</footer>
</html>
