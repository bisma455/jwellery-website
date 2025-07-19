<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
     <!-- BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
session_start();
$count=0;
if(isset($_SESSION['cart'])){
$count =count($_SESSION['cart']);
}

?>




    <!-- Navigation  -->
    <nav class="navbar bg-body-tertiary ">
  <div class="container-fluid font-awesome">
    <a class="navbar-brand"><img src="logon.jpg" alt="" height="60px" width="140px"></a>
   
    <div class="d-flex" >
    <a href="myshop.php" class="text-dark text-decoration-none pe-2" ><i class="fa-solid fa-house"></i> Home │ </a>
    <a href="index.php" class="text-dark text-decoration-none pe-2" ><i class="fa-solid fa-house"></i> Website </a>

    <a href="viewcart.php" class="text-dark text-decoration-none pe-2" ><i class="fa-solid fa-cart-shopping"></i> Cart (<?php echo $count ?>) │ </a> 

    <span class="text-dark pe-2" >
    <i class="fa-solid fa-user"></i>Hello, 
    <?php
 if(isset( $_SESSION['user'])){
   echo  $_SESSION['user']  ;
   echo"
   <a href='form/logout.php' class='text-dark text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>│ LogOut</a> │
";
 }
 else{
  echo"
   <a href='form/login.php' class='text-dark text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>│ Login</a> │
";
 }
    ?>
    <a href="admin/mystore.php" class="text-dark text-decoration-none pe-2">Admin  │ </a>
    <a href="search.php" class="text-dark text-decoration-none pe-2">Search</a>
    </span>
  </div>
</nav>
</div>

<!-- 2nd HEADING  -->
<div class="bg-success sticky-top" >
  <ul class="list-unstyled d-flex justify-content-center">
    <li>
    <a href="rings.php" class="text-decoration-none text-white fs-4 px-5 fw-bold" >Rings</a>
    <a href="Pendant.php" class="text-decoration-none text-white fs-4 px-5 fw-bold" >Pendants</a>
    <a href="bracelets.php" class="text-decoration-none text-white fs-4 px-5 fw-bold" >Bracelets</a>
  </li>
</ul>
</div>











<!-- BOOTSTRAP   -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- FONTAWESOME  -->
<script src="https://kit.fontawesome.com/fd0a3a109f.js" crossorigin="anonymous"></script>
</body>
</html>