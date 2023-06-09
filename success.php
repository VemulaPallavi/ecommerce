<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE user_item SET status=2 WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status= 1 ";
mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="payment.html">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>

        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="col-lg-4 col-md-6 ">
                    <img src="img/thanks.png" style="float: left;">
                </div>
                <div class="jumbotron">
                      <h3 align="center">YAY!! Your order is confirmed. Thank you for shopping with us.</h3><hr>
<p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
</br></br><h2 align="center"><bold>PAYMENT MODE</bold></h2></br>
        <input type="radio" id="payment" size="30" >Online Payment
<a  href="payment.html" class="btn btn-danger btn-lg active">PAY NOW</a><br><br>
<input type="radio" id="payment" size="30">Cash On Delivery
                </div>
            </div>

        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>