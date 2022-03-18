<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="spService.css">
    <link rel="stylesheet" href="package.css"> -->
    <?php linkCSS("vendor/spService");  ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("vendor/spAddPackage"); ?>
    <?php linkCSS("css/chat2"); ?>

    <?php linkCSS("footer");?>
    <?php linkCSS("vendor/addService"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $details = $data['userDetails']; ?>
</head>

<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>
    <div class="container">
        <div class="sidebar">

            <ul class="sidenav-links">
                <!-- <li>
          <a href="<?php echo BASEURL . '/spAnalytics'; ?>">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <span class="links_name">Analytics</span>
          </a>
        </li> -->
                <!-- <li>
          <a href="<?php echo BASEURL . '/spProfile'; ?>">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <span class="links_name">Profile</span>
          </a>
        </li> -->
                <li>
                    <a href="<?php echo BASEURL . '/spService'; ?>">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <span class="links_name">Packages</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/spBooking'; ?>">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="links_name">Bookings</span>
                    </a>
                </li>
                <!-- <li>
          <a href="<?php echo BASEURL . '/spMarketing'; ?>">
            <i class="fa fa-sticky-note" aria-hidden="true"></i>
            <span class="links_name">Marketing</span>
          </a>
        </li> -->

                <!-- <li>
          <a href="<?php echo BASEURL . '/spWallet'; ?>">
            <i class="fa fa-usd" aria-hidden="true"></i>
            <span class="links_name">Wallet</span>
          </a>
        </li> -->
                <li>
                    <a href="<?php echo BASEURL . '/spChat'; ?>">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span class="links_name">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/spCalendar'; ?>">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span class="links_name">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/spReview '; ?>">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span class="links_name">Review</span>
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
            <div class="home-content">
                <div class="wrapper">
                    <section class="chat-area">
                        <header>

                            <a href="<?php echo BASEURL . '/spChat/$data[service_id]'; ?>" class="back-icon"><i
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
                            <input type="text" name="message" class="input-field" placeholder="Type a message here..."
                                autocomplete="off">
                            <button class="send-btn"><i class="fab fa-telegram-plane "></i></button>
                        </form>
                    </section>
                </div>





        </section>
        <!-- The Modal -->




    </div>

    </div>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("vendor/chat"); ?>
    <?php linkJS("vendor/chatUserList"); ?>
    <?php linkJS("vendor/spService"); ?>
    <?php linkJS("vendor/spAddPackage"); ?>
    <?php linkJS("vendor/addService"); ?>
    <?php linkPhp("footer") ?>
</body>

</html>