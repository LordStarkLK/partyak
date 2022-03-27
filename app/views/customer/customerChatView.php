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
    <!-- Notification adding -->
    <?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>

    <?php linkJS("customer/chatUserList"); ?>
    <?php linkJS("vendor/spProfile"); ?>
    <?php linkJS("customer/customerProfile"); ?>
    <?php linkPhp("footer") ?>
</body>

</html>