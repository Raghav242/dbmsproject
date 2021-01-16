<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>GadgetsOnWheels</title>
  <!--icon link-->
  <link rel="shortcut icon" type="image/png" href="img/logonew.png" />
  <!--css stylesheet link-->
  <link rel="stylesheet" href="CSS/navbar.css">
</head>

<body>
  <div class="wait overlay">
    <div class="loader"></div>
  </div>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
          <span class="sr-only">navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="img/logonew.png" width="80px" style="margin-right: 30px;">
      </div>
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav">
          <li><a href="welcome.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
          <li><a href="phone.php">Mobiles</a></li>
          <li><a href="laptop.php">Laptops</a></li>
          <li><a href="tv.php">Tv</a></li>
          <li><a href="camera.php">Cameras</a></li>
          <li><a href="gaming.php">Gaming</a></li>
          <li><a href="headphone.php">Headphones</a></li>
          <li><a href="speaker.php">Speakers</a></li>
          <li><a href="projector.php">Projectors</a></li>


          <?php echo $message; ?>
 
 <?php
   $query = "SELECT p_id,p_name,price,p_image FROM products,categories
             WHERE cat_id = cat_num and cat_id = 2";
   $result = $link->query($query);
   if($result->num_rows > 0){
     while($rows = $result->fetch_assoc()){
         $id = $rows['p_id'];
         $name = $rows['p_name'];
         $price = $rows['price'];
         $image = $rows['p_image'];
         ?>
      
      echo '
					<div class="row">
						<div class="col-md-3">'.$n.'</div>
						<div class="col-md-3"><img class="img-responsive" src="img/'.$image.'" /></div>
						<div class="col-md-3">'.$p_name.'</div>
						<div class="col-md-3">'.price.''.$price.'</div>
					</div>';
				
			}
			?>
				<a style="float:right;" href="cart.php" class="btn btn-warning">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
      
     <?php }} ?>
        
</body>

</html>