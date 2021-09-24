<body>
        
        <div class="nav-bar">
            <div class="logo">
            <img class="logo-img" <?php srcIMG("navbarlogo.png") ?> alt="">  
            </div>    
                
            <div class="nav-items">
                <ul class="nav-links">
                    <li><a href="http://">Browse<i class="fa fa-caret-down"></i></a>
                        <ul class="browse-links">
                            <li><a href="<?php echo BASEURL . '/customerSearchVendor'; ?>">Search Vendor</a></li>
                            <li><a href="http://">Contact Service Provider</a></li>
                            <li><a href="http://">Contact Event Planner</a></li>
                        </ul>
                    </li>
                    <li><a href="http://">Contact Us</a></li>
                    <li><a href="http://">How it works</a></li>
                    <li><a href="http://">Plan Events<i class="fa fa-caret-down"></i></a>
                        <ul class="plan-links">
                            <li><a href="http://">Plan New Event</a></li>
                            <li><a href="http://">My Events</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>

            <div class="nav-chat">
                <a href="#"><i class="fa fa-comments"></i></a>
            </div>

            <div class="nav-notifi">
                <a href="#"><i class="fa fa-bell"></i></a>       
            </div>

            <div class="nav-but">
                <!-- <button class="login-button"type="button">Log out</button> --> 
                <ul class="nav-buttons">
                    <li><a href="#"><i class="fa fa-user"></i></a>
                        <ul class="button-links">
                            <!-- <li><a href="http://">Profile</a></li> -->
                            <li><a href="<?php echo BASEURL . '/logout'; ?>">Logout</a></li>
                        </ul>
                    </li>

                </ul>
                


                <!-- <button class="signup-button"type="button">Sign up</button> -->
            </div>
        </div>
</body>







   
    <!-- <button class="signup-button" type="button"><a href="<?php echo BASEURL . '/home/signup'; ?>">Sign up</a></button>
    <button class="login-button" type="button"><a href="<?php echo BASEURL . '/logout'; ?>">Logout</a></button>
  -->