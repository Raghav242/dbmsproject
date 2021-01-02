<!DOCTYPE html>
<?php include("header.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TV</title>
</head>
<body>
  <div class="main">
  <h1>TVs</h1>
  <?php echo $message; ?>
      <?php
        $query = "SELECT p_id,p_name,price,p_image,description FROM products,categories
                  WHERE cat_id = cat_num and cat_id = 3";
        $result = $link->query($query);
        if($result->num_rows > 0){
          while($rows = $result->fetch_assoc()){
              $id = $rows['p_id'];
              $name = $rows['p_name'];
              $price = $rows['price'];
              $image = $rows['p_image'];
              $des = $rows['description'];
              ?>
            <div class="box col-md-3"><i><p id="name"><b><?php echo $name; ?></b></p></i>
              <img src="<?php echo $image;?>" name="" class="" style="width: 150px; height: 150px;"><br>
              <p><?php echo "Rs: " ,$price, " / month"; ?></p>
              <p><?php echo "Description: " ,$des; ?></p>
              <button class="button">Add to Cart</button>
            </div>
          <?php }} ?>
          </div>

  </div>
</body>

</html>
