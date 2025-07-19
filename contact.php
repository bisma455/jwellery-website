<?php

include "Config.php";
if (isset($_POST['submit'])) {

    $product_fname = $_POST['firstname'];
    $product_lname = $_POST['lastname'];
    $product_phone = $_POST['phone']; 
    $product_email = $_POST['email']; 
    $product_message = $_POST['message']; 

    // INSERT PRODUCT
    mysqli_query($con, "INSERT INTO `contact`(`fname`, `lname`, `number`, `email`, `message`) 
                        VALUES ('$product_fname','$product_lname','$product_phone','$product_email','$product_message')");
echo "
<script>
alert('Message Sent');

</script>
";
    header("location:index.php");
}
?>
