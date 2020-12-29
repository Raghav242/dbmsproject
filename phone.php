<?php include("config.php");
$message="";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phones</title>
    <link rel="stylesheet" href="CSS/style3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        table.table tf .add{
          display: none;
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>
<br><br>
<h1> Phones</h1><br>
<div class = "container mt-10">
  <?php echo $message; ?>
      <?php
        $query = "SELECT p_id,p_name,price,p_image FROM products,categories
                  WHERE cat_id = cat_num and cat_id = 1";
        $result = $link->query($query);
        if($result->num_rows > 0){
          while($rows = $result->fetch_assoc()){
              $id = $rows['p_id'];
              $name = $rows['p_name'];
              $price = $rows['price'];
              $image = $rows['p_image'];
              ?>
            <div class="box col-md-3"><p><b><?php echo $name; ?></b></p><br>
              <img src="<?php echo $image;?>" name="" class="" style="width: 200px; height: 200px;"><br><br>
              <b><?php echo "Rs: " ,$price; ?></b>
            </div>
          <?php }} ?>
    </div>
</body>
</html>
