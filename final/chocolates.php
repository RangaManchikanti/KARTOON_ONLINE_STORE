<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our LifeStyle Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\chaco1.jpg" alt="Lindt Dark Chocolate">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lindt Dark Chocolate</h3>
                                    <p>Price:Rs. 820.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
					<p><a href="login.php" role="button" class=" btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
												<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                                <a href="cart_add.php?id=22" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/chaco2.jpg" alt="Dairy Milk Silk">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Dairy Milk Silk</h3>
                                    <p>Price: Rs. 450.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
										<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
												<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                                <a href="cart_add.php?id=23" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/chaco3.jpg" alt="Temptations Almond">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Temptations Almond</h3>
                                    <p>Price: Rs. 253.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
												<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                                <a href="cart_add.php?id=24" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/chaco4.jpg" alt="Kit Kat Dark">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Kit Kat Dark</h3>
                                    <p>Price: Rs. 99.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
										<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
												<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                                <a href="cart_add.php?id=25" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
				
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
              <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact: TejaSree</p>
                   <p>This website is developed by IIIrd Year IT-B</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
