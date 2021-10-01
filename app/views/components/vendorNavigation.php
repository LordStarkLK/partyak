<body>
        <div class="nav-bar">
            <div class="logo">
            <img class="logo-image" <?php srcIMG("navbarlogo.png") ?> alt="">
            </div>    
                
            <div class="nav-items">
                <ul class="nav-links">
                    <li><a href="<?php echo BASEURL . '/spAnalytics'; ?>">Business</a></li>
                    <li><a href="http://">Contact Us</a></li>
                    <li><a href="http://">How it works</a></li>   
                </ul>
            </div>

            <div class="nav-chat">
                <a href="#"><i class="fa fa-comments"></i></a>
            </div>

            <div class="nav-notifi">
                <a href="#"><i class="fa fa-bell"></i></a>       
            </div>

            <div class="nav-buttons">
                <button class="login-button"type="button" >Log out</button> 
                <a href="<?php echo BASEURL . '/logout'; ?>"><i class="fa fa-user"></i></a>

                <!-- <button class="signup-button"type="button">Sign up</button> -->
            </div>
        </div>
</body>