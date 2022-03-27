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
    <?php $details = $data['userDetails']; ?>
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
                        <section class="chat-area">
                            <header>

                                <a href="<?php echo BASEURL . '/customerChat'; ?>" class="back-icon"><i
                                        class="fas fa-arrow-left"></i></a>
                                <img src="<?php echo BASEURL; ?>/public/img/userImages/<?php if ($details['profilePicture']) {
                    echo $details['profilePicture'];
                    } 
                    else {
                        echo "pp_default.png";
                    } ?>" alt="">
                                <div class="details">
                                    <span><?php echo $details['f_name']. " ". $details['l_name'] ?></span>
                                    <p></p>
                                </div>
                            </header>
                            <div class="chat-box">

                            </div>
                            <form action="#" class="typing-area">
                                <input type="text" class="incoming_id" name="incoming_id"
                                    value="<?php echo $details['user_id']; ?>" hidden>
                                <input type="text" name="message" class="input-field"
                                    placeholder="Type a message here..." autocomplete="off">
                                <button class="send-btn"><i class="fab fa-telegram-plane "></i></button>
                            </form>
                        </section>
                    </div>



                </div>


    </div>
    </section>
    </div>
    <!-- Notification adding -->
    <?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>

    
    <?php linkJS("customer/chat"); ?>
    <?php linkJS("vendor/spProfile"); ?>
    <?php linkJS("customer/customerProfile"); ?>
    <?php linkPhp("footer") ?>
</body>

</html>