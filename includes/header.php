<!-- this code is header navigation bar in website -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!--To add menu option when screen width is reduced-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <!--If user is logged in, then header will contain these-->
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"> Cart </a></li>
                    <li><a href = "settings.php">Settings</a></li>
                    <li><a href = "orderhistory.php"> Order History</a></li>
                    <li><a href = "logout_script.php"> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"> Sign Up</a></li>
                    <li><a href="login.php"> Login</a></li>
                    <li><a href="aboutus.php"> About us</a></li>
                    <li><a href="contact.php"> Contact</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>