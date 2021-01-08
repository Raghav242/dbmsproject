<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if(!empty($_COOKIE['item'])){
  $cart_item .= count($_COOKIE["item"]);

}
if (isset($_GET['action']) && $_GET['action'] == 'cookie'){
  header("location: cart.php");
}



?>

<?php include("config.php");
$message="";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"></head>
<link rel="stylesheet" href="CSS/header.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--icon link-->
 <link rel="shortcut icon" type="image/png" href="img/logonew.png" />
 <!--font awesome icon link--->
 <script src="https://kit.fontawesome.com/db47262ed8.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="navba">
  <a href="#">Gadgets On Wheels</a>
  <a href="welcome.php">Home</a>
  <a href="#contact">Feedback</a>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo htmlspecialchars($_SESSION["username"]); ?></a></li> &nbsp;
 
 <li class="nav-item">
  <a href="?action=cookie" class="nav-link">
  <i class="fa fa-shopping-cart" aria-hidden="true">
  <span class="badge badge-light m-1"><?php if(!empty($cart_item)){echo $cart_item;}else{echo "0";}; ?>
  
  
  
  </span>
  
  
  </i>
  
  
  </a>
  
  </li>
  
  </ul>
</div>
<div class="sidenav">
  <a id="cat" href="#">Categories</a><br>
  <a href="phone.php">Mobiles</a>
  <a href="laptop.php">Laptops</a>
  <a href="tv.php">TVs</a>
  <a href="camera.php">Cameras</a>
  <a href="game.php">Gaming and Accesories</a>
  <a href="headphone.php">Headphones</a>
  <a href="speaker.php">Speakers</a>
  <a href="projector.php">Projectors</a>
</div>
<!-- main content goes here
Include the code withing the main class div
-->


</body>
</html>
