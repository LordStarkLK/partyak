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

    <?php $service_id = $data['service_id'];?>
    <?php $profileInfo = $data['myDetails']; ?>

</head>

<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>
    <div class="container">
        <div class="sidebar">

            <ul class="sidenav-links">

            
            <li>
                <a href="<?php echo BASEURL . '/spPackage/index/'.$service_id.''?>">
                <i class="fa fa-server" aria-hidden="true"></i>
                <span class="links_name">Packages</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . '/spBooking/index/'.$service_id.''; ?>">
                <i class="fa fa-list" aria-hidden="true"></i>
                <span class="links_name">Bookings</span>
                </a>
            </li>
            
            <li>
            <a href="<?php echo BASEURL . '/spChat/index/'.$service_id.''; ?>">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span class="links_name">Chat</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . '/spCalendar/index/'.$service_id.''; ?>">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <span class="links_name">Calendar</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . '/spReview/index/'.$service_id.''; ?>">
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
        <!-- The Modal -->




    </div>

    </div>

    <?php linkJS("vendor/chatUserList"); ?>
    <?php linkJS("vendor/spService"); ?>
    <?php linkJS("vendor/spAddPackage"); ?>
    <?php linkJS("vendor/addService"); ?>
    <?php linkPhp("footer") ?>
</body>

</html>