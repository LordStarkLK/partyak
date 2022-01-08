<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <?php linkCSS("customer/customerProfileView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <?php linkCSS("css/chat2"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $profileInfo = $data['myDetails']; ?>
</head>

<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>
    <div class="container">
        <div class="sidebar">

            <ul class="sidenav-links">
                <li>
                    <a href="#">
                        <i class="fas fa-user-tie"></i>
                        <span class="links_name">Personal Info</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/customerProfileBooking'; ?>">
                        <i class="fas fa-book"></i>
                        <span class="links_name">Booking Details</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/customerProfilePaymentD'; ?>">
                        <i class="fas fa-money-check-alt"></i>
                        <span class="links_name">Payment Details</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/customerChat'; ?>">
                        <i class="fas fa-comments"></i>
                        <span class="links_name">Chat</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-bell"></i>
                        <span class="links_name">Notification</span>
                    </a>
                </li>
                <li>

                    <a href="<?php echo BASEURL . '/customerProfile/resetPassword'; ?>">
                        <i class="fas fa-unlock"></i>
                        <span class="links_name">Change Password</span>
                    </a>
                </li>

            </ul>
        </div>

        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard">CHAT</span>
                </div>
            </nav>

            <header>
            <div class="home-content">
                

                    <div class="wrapper">
                        <section class="users">
                            <header>
                                <div class="content">
                                    <img src="<?php echo BASEURL; ?>/public/img/userImages/<?php if ($profileInfo['profilePicture']) {
                    echo $profileInfo['profilePicture'];
                    } 
                    else {
                        echo "pp_default.png";
                    } ?>" alt="">
                                    <div class="details">
                                        <span><?php echo $profileInfo['f_name']. " " . $profileInfo['l_name'] ?></span>
                                        <!-- <p><?php echo $row['status']; ?></p> -->
                                    </div>
                                </div>

                            </header>
                            <div class="search">
                                <span class="text">Select an user to start chat</span>
                                <input type="text" placeholder="Enter name to search...">
                                <button><i class="fas fa-search"></i></button>
                            </div>
                            <div class="users-list">

                            </div>
                        
                   
                                </section>
                    </div>

                   


                
            </div>
        </section>
    </div>
    <?php linkJS("customer/chatUserList"); ?>
    <?php linkJS("vendor/spProfile"); ?>
    <?php linkJS("customer/customerProfile"); ?>
    <?php linkPhp("footer") ?>
</body>

</html>