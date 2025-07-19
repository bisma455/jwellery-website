<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>

    <?php
    include 'header.php';
    ?>
</head>
<body>
   <div class="container-fluid">
    <div class="col-md-12"> 
     <div class="row">
         <h1 class="text-success my-3 text-center">Rings</h1>
         <?php
include 'Config.php';
$record = mysqli_query($con, "SELECT * FROM `tblproduct`");


while ($row = mysqli_fetch_array($record)) {
$checkpage = $row['PCategory'];
if($checkpage === 'Rings'){




    $imagePath = "admin/product/" . trim($row['Pimage']);
    
    echo "
    <div class='col-md-6 col-lg-4 m-auto mb-3'>
    <form action ='insertcart.php' method ='POST'>
    
    <div class='card m-auto' style='width: 18rem;'>
        <img src='$imagePath' height='250px' width='200px' class='card-img-top'>
        <div class='card-body text-center '>
            <h5 class='card-title text-danger fs-4 fw-bold'>{$row['PName']}</h5>
            <p class='card-text text-danger fs-4 fw-bold'>RS: {$row['PPrice']}</p>
            <input type='hidden' name ='PName' value = '$row[PName]'>
            <input type='hidden' name ='PPrice' value = '$row[PPrice]'>
            <input type='number' name ='PQuantity' value = 'min='1' max = '20' placeholder='Quantity' ><br><br>
            <input type='submit' name='addCart' class ='btn btn-success text-white w-100' value='Add to Cart'>
        </div>
        </div>
        </form>
    </div>";
}
} 
?>

 </div> 
    </div>
   </div>









</body>
</html>
