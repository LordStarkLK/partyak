<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("vendor/spProfile"); ?>
  <?php linkCSS("navigation"); ?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <?php linkPhp("navigation") ?>
  </header>
  <div class="container">
    <div class="sidebar">

      <ul class="sidenav-links">
        <li>
          <a href="<?php echo BASEURL . '/spAnalytics'; ?>">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spProfile'; ?>">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <span class="links_name">Profile</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spService'; ?>">
            <i class="fa fa-server" aria-hidden="true"></i>
            <span class="links_name">Services</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spBooking'; ?>">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="links_name">Booking</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spMarketing'; ?>">
            <i class="fa fa-sticky-note" aria-hidden="true"></i>
            <span class="links_name">Marketing</span>
          </a>
        </li>

        <li>
          <a href="<?php echo BASEURL . '/spWallet'; ?>">
            <i class="fa fa-usd" aria-hidden="true"></i>
            <span class="links_name">Wallet</span>
          </a>
        </li>
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
          <span class="dashboard">PROFILE</span>
        </div>
      </nav>

      <div class="home-content">
        <div class="profile_pic">
          <div class="image">
            <img <?php srcIMG("avatar.png") ?> alt="Avatar">
            <!-- <img src="/public/img/avatar.png" alt="Avatar"> -->
          </div>

          <div class="url">
            <div class="facebook">
              <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
              <div class="socialLink">
                <a href="fblink">https://www.facebook.com/lara.fernando</a>
              </div>
            </div>
            <div class="linkedin">
              <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
              <div class="socialLink">
                <a href="linkedinlink">https://www.linkedin.com/in/lara-fernando</a>
              </div>
            </div>
          </div>
        </div>
        <div class="profile_details">
          <div class="personal_info">
            <a>Personal Information</a>
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
          <div class="bank_info">
            <a>Bank Account Information</a>
            <div class="edit"><a href="#">Edit</a></div>
            <div class="row">
              <div class="col_name">
                <label for="accname">Acc: Number</label>
              </div>
              <div class="col_data">
                <p>1234567890</p>
              </div>
            </div>
            <div class="row">
              <div class="col_name">
                <label for="accholdername">Acc: Holder Name</label>
              </div>
              <div class="col_data">
                <p>Lara Fernando</p>
              </div>
            </div>
            <div class="row">
              <div class="col_name">
                <label for="bank">Bank Name</label>
              </div>
              <div class="col_data">
                <p>Sampath</p>
              </div>
            </div>
            <div class="row">
              <div class="col_name">
                <label for="branch">Branch Name</label>
              </div>
              <div class="col_data">
                <p>Matara</p>
              </div>
            </div>
            <div class="row">
              <div class="col_name">
                <label for="bcode">Branch Code</label>
              </div>
              <div class="col_data">
                <p>1221</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
  <?php linkJS("vendor/spProfile"); ?>
</body>

</html>