<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <?php
    include 'header.php';
    
    ?>
    <div class="container">
<div class="row">
<div class="col-lg-12">
    <h1 class="text-dark text-center bg-light rounded">My Cart</h1>
</div>
</div>
 </div>

<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-9">
<table class="table table-bordered text-center">
    <thead class="bg-success text-white fs-5">
    <th>index No.</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Quantity</th>
    <th>Total Price</th>
    <th>Update</th>
    <th>Delete</th>
</thead>
<tbody>
<?php


$total=0;
$itemTotal=0;
$i=0;
if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value){
      
        $productPrice = (float) $value['productPrice'];
        $productQuantity = (int) $value['productQuantity'];

        // Calculate the total for each item
        $itemTotal = $productPrice * $productQuantity;
        $total += $itemTotal;
$i=$key+1;
        echo"
        <form action ='insertcart.php' method='POST'>
        <tr>
        <td>$i</td>
        <td><input type ='hidden' name ='PName' value='$value[productName]'> $value[productName]</td>
        <td><input type ='hidden' name ='PPrice' value='$value[productPrice]'> $value[productPrice]</td>
        <td><input type ='text' name ='PQuantity' value='$value[productQuantity]'> </td>
        <td>$itemTotal</td>
       <td><button name='update' class='btn-warning'>Update</button></td>
       <td><button name =' remove'  class='btn-danger'>Delete</button></td>
  <td> <input type='hidden' name='item'value=  '$value[productName]'></td>
        </tr>
        </form>
        ";
    }
}

?>

</tbody>
</table>
    </div>
    <div class="lg-3 text-center">
<h3>Total</h3>
<h1 class='bg-success text-white'><?php echo number_format($total,2) ?></h1>


    </div>
</div>
</div>











</body>
</html>