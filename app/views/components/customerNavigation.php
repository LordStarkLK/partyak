<!-- <body>
        
        <div class="nav-bar">
            <div class="logo">
            <img class="logo-img" <?php srcIMG("navbarlogo.png") ?> alt="">  
            </div>    
                
            <div class="nav-items">
                <ul class="nav-links">
                    <a href="<?php echo BASEURL . '/customerContactServiceProvider'; ?>">Browse</i></a>
                            <ul class="browse-links">
                            <li><a href="<?php echo BASEURL . '/customerSearchVendor'; ?>">Search Vendor</a></li>
                            <li><a href="<?php echo BASEURL . '/customerContactServiceProvider'; ?>">Contact Service Provider</a></li>
                            <li><a href="<?php echo BASEURL . '/customerContactEventPlanner'; ?>">Contact Event Planner</a></li>
                        </ul>
                    </li> -->
<!-- <li><a href="http://">Contact Us</a></li>
                    <li><a href="<?php echo BASEURL . '/howItWork'; ?>">How it works</a></li>
                    <li><a href="http://">Plan Events<i class="fa fa-caret-down"></i></a>
                        <ul class="plan-links">
                            <li><a href="<?php echo BASEURL . '/customerPlanNewEvent'; ?>">Plan New Event</a></li>
                            <li><a href="<?php echo BASEURL . '/customerMyEvent'; ?>">My Events</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>

            <div class="nav-chat">
                <a href="<?php echo BASEURL . '/customerChat'; ?>"><i class="fa fa-comments"></i></a>
            </div>

            <div class="nav-notifi">
                <a href="#"><i class="fa fa-bell"></i></a>       
            </div>

            <div class="nav-but">
            <a href="<?php echo BASEURL . '/logout'; ?>">Logout</a>  -->
<!-- <ul class="nav-buttons">
                    <li><a href="#"><i class="fa fa-user"></i></a>
                        <ul class="button-links">
                            <li><a href="http://">Profile</a></li> 
                            <li><a href="<?php echo BASEURL . '/logout'; ?>">Logout</a></li>
                        </ul>
                    </li>
                </ul> -->



<!-- <button class="signup-button"type="button">Sign up</button> -->
<!-- </div>
        </div>
</body> -->








<!-- <button class="signup-button" type="button"><a href="<?php echo BASEURL . '/home/signup'; ?>">Sign up</a></button>
    <button class="login-button" type="button"><a href="<?php echo BASEURL . '/logout'; ?>">Logout</a></button>
  -->

<body>

    <div class="nav-bar" id="myTopnav">

        <div class="logo">
            <a href="<?php echo BASEURL . '/customerHome'; ?>"><img class="logo-img" <?php srcIMG("navbarlogo.png") ?> alt=""> </i></a>

        </div>

        <div class="nav-items">
            <div class="nav-links">
                <a href="<?php echo BASEURL . '/customerContactServiceProvider'; ?>">Browse</i></a>
                <a href="<?php echo BASEURL . '/howItWork'; ?>" class="active">How it work</a>
                <div class="dropdown">
                    <button class="dropbtn">Plan Event
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="<?php echo BASEURL . '/customerPlanNewEvent'; ?>">Plan New Event</a>
                        <a href="<?php echo BASEURL . '/customerMyEvent'; ?>">My Event</a>
                    </div>
                </div>

            </div>

            <div class="chat">
                <div class="nav-chat">
                    <a href="<?php echo BASEURL . '/customerChat'; ?>"><i class="fa fa-comments"></i></a>
                </div>

                <div class="nav-noti">
                    <a href="#"><i class="fa fa-bell"></i></a>
                </div>

            </div>



            <div class="nav-user">
                <div class="user">
                    <button class="userbtn"><i class="fa fa-user"></i></button>
                    <div class="user-content">
                        <a href="<?php echo BASEURL . '/customerProfile'; ?>">Profile</a>
                        <a href="<?php echo BASEURL . '/logout'; ?>">Logout</a>
                    </div>
                </div>
            </div>

        </div>

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

</body>

</html>