<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gadgets On Wheels</title>
    <link rel="stylesheet" href="CSS/style3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#"></a>
    <img id="logo-img" src="img/logo1.png" width="80px" height="60px"alt="">
  </div>
  <ul class="nav navbar-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Feedback</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>

  </ul>
</div>
</div>
</nav>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
         <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
         <a href="logout.php" class="btn btn-danger">Sign Out</a>
    </div>
<h2>Browse from our various categories!</h2>
<br>
    <!--Product categories will be displayed here -->
<div id="products">
  <a href = "phone.php"><div class="box col-md-3"><p><b>Mobiles</b></p><br> <img src="img/mobile.jpg" class="image"></div></a>
  <a href = "laptop.php"><div class="box col-md-3"><p><b>Laptops</b></p><br> <img src="img/laptop.jpg" class="image"></div></a>
  <a href = "tv.php"><div class="box col-md-3"><p><b>TVs</b></p><br> <img src="img/tv.jfif" class="image"></div></a>
  <a href = "camera.php"><div class="box col-md-3"><p><b>Cameras</b></p><br> <img src="img/camera.jfif" class="image"></div></a>
  <a href = "game.php"><div class="box col-md-3"><p><b>Gaming and accesories</b></p><br> <img src="img/gaming.jpg" class="image"></div></a>
  <a href = "headphone.php"><div class="box col-md-3"><p><b>Headphones</b></p><br> <img src="img/headphones.jpg" class="image"></div></a>
  <a href = "speaker.php"><div class="box col-md-3"><p><b>Speakers</b></p><br> <img src="img/speakers.png" class="image"></div></a>
  <a href = "projector.php"><div class="box col-md-3"><p><b>Projectors</b></p><br> <img src="img/projector.jpg" class="image"></div></a>
</div>
</body>
</html>
