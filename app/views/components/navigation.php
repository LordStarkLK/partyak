<div class="nav-bar">
    <div class="logo">
        <a href="<?php echo BASEURL . '/home'; ?>"> <img class="logo-image" <?php srcIMG("navbarlogo.png") ?> alt=""></a>

    </div>
    <div class="nav-items">
        <ul class="nav-links">

            <?php
            if (!isset($_SESSION["type"])) {
                echo '<li><a href="#">Browse</a></li>';
                echo '<li><a href="#">Contact Us</a></li>';
            } else {
                if ($_SESSION["type"] == "vendor") {

                    echo "<li><a href='";
                    echo BASEURL . '/spBusiness';
                    echo "'>Business</a></li>";
                    echo '<li><a href="#">Be a customer</a></li>';
                } elseif ($_SESSION["type"] == "customer") {
                    echo '<li><a href="#">Browse</a></li>';
                }
            }
            ?>
            <li><a href="<?php echo BASEURL . '/epAnalytics'; ?>">How it works</a></li>
        </ul>
    </div>
    <?php
    if (!isset($_SESSION["type"])) {
        echo "<div class='nav-btn'>";

        echo "<button class='signup-button btn-sign' type='button'><a href='";
        echo BASEURL . '/home/signup';
        echo "'>Sign up</a></button>";

        echo "<button class='login-button btn-sign' type='button'><a href='";
        echo BASEURL . '/login';
        echo " '>Login</a></button>
        </div>";
    } else {
        echo '
            <div class="nav-bar-links-vendor">
            <div class="nav-item-vendor">
                <a href="#"><i class="fa fa-comments"></i></a>
                <a href="#"><i class="fa fa-bell"></i></a>
                <a href="#"><i class="fa fa-user"></i></a>
            </div>
            <div class="nav-buttons-vendor">
                <button class="login-button" type="button"><a href="';
        echo BASEURL . '/logout';
        echo '">Log out</a></button>
            </div>
        </div>';
    }
    ?>


    <!-- <div class='nav-btn'>
        <button class='signup-button btn-sign' type='button'><a href='
        <?php echo BASEURL . '/home/signup'; ?>
        '>Sign up</a></button>
        <button class='login-button btn-sign' type='button'><a href='
        <?php echo BASEURL . '/login'; ?>
        '>Login</a></button>
    </div>" -->
    <!-- <button class="login-button"type="button">Log in</button> -->
</div>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>