<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
</head>
<body>
    <?php
    include "header.php";
    
    
    ?>
    <div class="container">
    <h2 class="text-center">Product Search</h2>
    <form action="search.php" method="POST" class="text-center mb-3">
        
        <input type="text" id="search" name="search" placeholder="Enter product name" style="width: 600px; height:50px;" class="border">
        <button type="submit" name="submit" class=" bg-success fs-4 text-white ">Search</button>
    </form>
    </div>
    <div class="container-fluid">
    <div class="col-md-12"> 
     <div class="row">
<?php
if (isset($_POST['submit'])) {
    // Include your database connection configuration
    include 'Config.php';

    // Get the search term from the form
    $searchTerm = $_POST['search'];

    // SQL query to search for products
    $query = "SELECT * FROM tblproduct WHERE PName LIKE '%$searchTerm%' OR PCategory LIKE '%$searchTerm%' ";

    // Execute the query
    $result = mysqli_query($con, $query);
    
    // Check if any results were found
    if (mysqli_num_rows($result) > 0) {
        // Display the results
        while ($row = mysqli_fetch_assoc($result)) {
    


            $imagePath = "admin/product/" . trim($row['Pimage']);
    
            echo "
            <div class='col-md-6 col-lg-4 m-auto mb-3'>
            <form action ='insertcart.php' method ='POST'>
            
            <div class='card m-auto' style='width: 18rem;'>
                <img src='$imagePath' height='250px' width='200px' class='card-img-top'>
                <div class='card-body text-center '>
                    <h5 class='card-title text-danger fs-4 fw-bold'>{$row['PName']}</h5>
                    <p class='card-text text-danger fs-4 fw-bold'>RS: {$row['PPrice']}</p>
                    
                   
                </div>
                </div>
                </form>
            </div>";








        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    mysqli_close($con);
}
?>

</div> 
    </div>
   </div>
</body>
</html>