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
    <?php $details = $data['userDetails']; ?>
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
    <section class="chat-area">
      <header>
      
        <a href="<?php echo BASEURL . '/adminChat'; ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
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
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $details['user_id']; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button class="send-btn"><i class="fab fa-telegram-plane "></i></button>
      </form>
    </section>
  </div>

  <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("chat"); ?>


                </div>
            </div>

    </div>







    </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>