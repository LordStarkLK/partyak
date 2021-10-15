<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <?php linkCSS("customer/customerProfileView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <i class="fas fa-user-tie" ></i>
              <span class="links_name">Personal Info</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/customerProfileBooking'; ?>">
              <i class="fas fa-book" ></i>
              <span class="links_name">Booking Details</span>
            </a>
          </li>
        <li>
          <a href="<?php echo BASEURL . '/customerProfilePaymentD'; ?>">
            <i class="fas fa-money-check-alt" ></i>
            <span class="links_name">Payment Details</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-comments" ></i>
            <span class="links_name">Chat</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class="fas fa-bell" ></i>
            <span class="links_name">Notification</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-unlock" ></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>
       
      </ul>
</div>
  
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">PROFILE</span>
      </div>
    </nav>

    <div class="home-content">
        <div class="profile_pic">
            <div class="image">
            <img <?php srcIMG("avatar.png") ?> alt="Avatar">
            <!-- <img src="/public/img/avatar.png" alt="Avatar"> -->
            </div>
        </div>
        <div class="profile_details">
            <div class="personal_info">
                <a>Personal Information</a><br><br>
                <div class="edit"><a href="#">Edit</a></div>
                <div class="row">
                    <div class="col_name">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col_data">
                        <p>Lara</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col_name">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col_data">
                        <p>Fernando</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col_name">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="col_data">
                        <p>Female</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col_name">
                        <label for="nic">NIC number</label>
                    </div>
                    <div class="col_data">
                        <p>985496210V</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col_name">
                        <label for="email">Email</label>
                    </div>
                    <div class="col_data">
                        <p>lara@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>
</div>
<?php linkJS("vendor/spProfile"); ?>
<?php linkPhp("footer") ?>
</body>
</html>