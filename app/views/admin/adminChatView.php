<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminChat"); ?>
    <?php linkCSS("css/all"); ?>
    <?php linkCSS("css/chat2"); ?>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    
    <?php $profileInfo = $data['myDetails']; ?>
</head>

<body>
    <div class="container">
        <?php linkPHP("adminSidebar");?>
        <section class="home-section">

            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
                <span class="dashboard">CHAT</span>
            </div>

            <div class="home-content">
                <div class="content">

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

                    <?php linkJS("admin/chatUserList"); ?>


                </div>
            </div>

    </div>







    </section>
    </div>

    <?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>