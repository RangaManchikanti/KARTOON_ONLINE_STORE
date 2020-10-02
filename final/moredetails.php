<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
		<style>
	.zoom {
    padding: 50px;
	align:left;
    transition: transform .2s;
    width: 200px;
    height: 200px;
    margin: 20 auto;
	}

	.zoom:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
$("#video1").click(function(){$("img").attr("src","img/cam1.jpeg")});
$("#video2").click(function(){$("img").attr("src","img/cam2.jpeg")});
$("#video3").click(function(){$("img").attr("src","img/cam3.jpeg")});
});
</script>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our KartOON!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            </center>
			</div>
	
	<div class="zoom" style="padding-left:350px;">
<img src="img/cam1.jpeg" alt="Cannon" align="center"  width="500" height="300">	</div>
<div style="padding-top:230px;padding-left:350px">
<form>
<input type=button class="btn btn-primary" id="video1" value="view1" name="videos">
<input type=button class="btn btn-primary" id="video2" value="view2" name="videos">
<input type=button class="btn btn-primary" id="video3" value="view3" name="videos">

</video>
</form>
</div>


<div>
           
            <div style="padding-top:100px;" class="container">
                <div class="jumbotron">
                    <h2 align="center";>CANON EOS</h2>
                    <p><h3>SPECIFICATIONS : </h3><br><i>Model name : Canon EOS 1500D DSLR camera<br>Features : it has dual kit with EF-S 18-55 IS 11 + 55-250 IS ll lens<br>
					MeMory size : 16GB and Carry case<br>
					Color : Black</i><h3>Highlights : </h3><br><i>Effective Pixels : 24.1MP<br>
					Sendor Type : CMOS<br>Wifi Available<br>1080p recording at 30p</p></i>
                </div>
            </div>
            </center>
			</div>

                 
				    
					 <p><a href="products.php" role="button" class="btn btn-primary btn-block">GO BACK</a></p>
                                
                    
					<br><br><br><br>
          
		  <footer class="footer">
               <div class="container">
              <center>
                   <p>Copyright &copy KartOON. All Rights Reserved. | Contact: Dr. K.K Baseer</p>
                   <p>This website is developed by IIIrd Year IT-a</p>
               </center>
               </div>
           </footer>
                   
     
        </div>
    </body>
</html>
