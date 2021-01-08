<!DOCTYPE html>
<?php include("header.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phones</title>
    
</head>
<body>
  <div class="main">
  <h1>Phones</h1>
  <?php echo $message; ?>
      <?php


if (isset($_POST['id']) && !empty($_POST['id'])){
  $d=0;
  if (!empty($_COOKIE['item'])&& is_array($_COOKIE['item'])){
    foreach ($_COOKIE['item'] as $name => $value){
      $d =$d +1;
    }
    $d =$d +1;
  }
  else{
    $d =$d +1;
  }
}
 $query = "SELECT p_id,p_name,price,qty,p_image,description FROM products,categories
                  WHERE cat_id = cat_num and cat_id = 1";
        $result = $link->query($query);
        if($result->num_rows > 0){
          while($rows = $result->fetch_assoc()){
              $id = $rows['p_id'];
              $name = $rows['p_name'];
              $price = $rows['price'];
              $qty=$rows['qty'];
              $image = $rows['p_image'];
              $des = $rows['description'];
          
      
          if(!empty($_COOKIE['item']) && is_array($_COOKIE['item'])){
            foreach ($_COOKIE['item'] as $name1 => $value){
$value11 =explode("__",$value);
$found=0;
if($image == $value11[0]) {
  $found= $found+1;
  $qty1= $value11[3]+1;
  $price1 = $value11[5]* $qty1;
 setcookie("item[$name1]" , $image."__".$name."__".$price1."___".$qty1."__".$id."__".$price, time()+1800);





}
            }
            }



            if ($found==0){
              setcookie("item[$d]", $image."__".$name."__".$price1."___".$qty1."__".$id."__".$price, time()+1800);

            }
          
else{
  setcookie("item[$d]", $image."__".$name."__".$price1."__".$qty1."__".$id."__".$price, time()+1800);
}
header("Refresh:0; url=http://localhost/dbmsproject/phone.php");





              ?>
          
            <div class="box col-md-3" style="margin-left: 20px ;"><i><p id="name"><b><?php echo $name; ?></b></p></i>
              <img src="<?php echo $image;?>" name="" class="" style="width: 150px; height: 150px;"><br>
              <p><?php echo "Rs: " ,$price, " / month"; ?></p>
              <p><?php echo "Quantity: " ,$qty; ?></p>
              <p><?php echo "Description: " ,$des; ?></p>
              <div class="btn-group">
              <form method="post"  action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">
              <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" id="id">
              <button class="button">
              <i class="fas fa-shopping-cart"></i>Add To Cart
              </button>



              </form>



              </div>
            </div>
          <?php }}?>
          
          </div>

  </div>

</body>

</html>
