<!--establish the connection to database, and start the session-->
<?php
$con = mysqli_connect("localhost:3322", "root", "","store");
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>