<body>
    <div class="nav-bar">
        <div class="logo">
            <img class="logo-image" <?php srcIMG("navbarlogo.png") ?> alt="">
        </div>

        <div class="nav-items">
            <ul class="nav-links">
                <li><a href="<?php echo BASEURL . '/spAnalytics'; ?>">Business</a></li>
                <li><a href="<?php echo BASEURL . '/howItWork'; ?>">How it works</a></li>
            </ul>
        </div>
        <div class="nav-bar-links-vendor">
            <div class="nav-item-vendor">
                <a href="#"><i class="fa fa-comments"></i></a>
                <a href="#"><i class="fa fa-bell"></i></a>
                <a href="#"><i class="fa fa-user"></i></a>

            </div>

            <div class="nav-buttons-vendor">
                <button class="login-button" type="button"><a href="<?php echo BASEURL . '/logout'; ?>">Log out</a></button>


                <!-- <button class="signup-button"type="button">Sign up</button> -->
            </div>
        </div>
    </div>
</body>