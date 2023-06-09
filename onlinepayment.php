<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}


//We will change the status of the items purchased by the user to 'Confirmed'


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
                      <h3 align="center">YAY!! Your Payment is successfully done. Thank you for shopping with us.</h3><hr>
<p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>

                </div>
            </div>

        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>