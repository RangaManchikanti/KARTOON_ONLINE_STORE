 
<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
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
<script language="javascript"></script>
<div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our KarTOON!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
           </div>


<body>
<fieldset>
  <legend style="color:black";>PAYMENT</legend>
<form action="success.php" align="center">

<br>
 <p class="ex"> Name on the card:
  <input type="text" id="name" name="id" ></p>
  <br>
 <p class="ex">  Card number:
  <input type="text" id="numb" ></p>
  <br>
  <form action="/action_page.php">
 <p class="ex">  Expiration date:
  <input type="text" id="exp" placeholder="mm/yy"></p>
<br>
 <p class="ex">  Cvv number:
  <input type="text" id="cvv" ></p>
  <br>
</form>
<table align="center">

<tr><td>  <th> <a href="sampleotp.html?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a> </th> </td></tr>

 </table>
  </fieldset>
 </form>
 <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
              <center>
                   <p>Copyright &copy KarTOON. All Rights Reserved. | Contact: RangaManchikanti</p>
                   <p>This website is developed by IIIrd Year IT-A</p>
               </center>
               </div>
           </footer>
</body>
</html>
