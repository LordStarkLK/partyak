<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    
    <?php linkCSS("chat"); ?>
    <?php linkCSS("css/all"); ?>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $profileInfo = $data['myDetails']; ?>
</head>

<body>
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

  <?php linkJS("chatUserList"); ?>

</body>







</html>