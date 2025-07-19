<?php
session_start();

if(isset($_SESSION['user'])){
// Initialize the cart if it's not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['addCart'])) {
    $product_Name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];

    $checkitem = array_column($_SESSION['cart'], 'productName');
    if (in_array($product_Name, $checkitem)) {
        echo "
        <script>
            alert('Product already added');
            window.location.href ='myshop.php';
        </script>";
    } else {
        $product_Name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
        $product_quantity = $_POST['PQuantity'];

        $_SESSION['cart'][] = array(
            'productName' => $product_Name,
            'productPrice' => $product_price,
            'productQuantity' => $product_quantity
        );

        header("location:viewcart.php");
    }
}

if (isset($_POST['remove'])) {
    if (isset($_POST['item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['productName'] === $_POST['item']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location:viewcart.php');
            }
        }
    }
}

if (isset($_POST['update'])) {
    if (isset($_POST['item'])) {
        $updateItem = $_POST['item'];
        $newProduct_Name = $_POST['PName'];
        $newProduct_price = $_POST['PPrice'];
        $newProduct_quantity = $_POST['PQuantity'];

        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['productName'] === $updateItem) {
                // Update the existing item in the cart
                $_SESSION['cart'][$key]['productName'] = $newProduct_Name;
                $_SESSION['cart'][$key]['productPrice'] = $newProduct_price;
                $_SESSION['cart'][$key]['productQuantity'] = $newProduct_quantity;

                header("location:viewcart.php");
            }
        }
    }
}
}

else{
    header('location:form/login.php');
}
?>
