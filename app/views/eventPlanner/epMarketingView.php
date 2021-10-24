<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("eventPlanner/epMarketing"); ?>
  <?php linkCSS("navigation"); ?>
  <?php linkCSS("footer"); ?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <?php linkPhp("vendorNavigation") ?>
  </header>
  <div class="container">
    <div class="sidebar">

      <ul class="sidenav-links">
        <li>
          <a href="<?php echo BASEURL . '/epAnalytics'; ?>">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/epProfile'; ?>">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <span class="links_name">Profile</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/epService'; ?>">
            <i class="fa fa-server" aria-hidden="true"></i>
            <span class="links_name">Services</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/epBooking'; ?>">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="links_name">Booking</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/epMarketing'; ?>">
            <i class="fa fa-sticky-note" aria-hidden="true"></i>
            <span class="links_name">Marketing</span>
          </a>
        </li>

        <li>
          <a href="<?php echo BASEURL . '/epWallet'; ?>">
            <i class="fa fa-usd" aria-hidden="true"></i>
            <span class="links_name">Wallet</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="links_name">Chat</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="links_name">Calendar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/epReview '; ?>">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span class="links_name">Review</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/epnote '; ?>">
            <i class='bx bx-notepad' aria-hidden="true"></i>
            <span class="links_name">Note</span>
          </a>
        </li>
      </ul>
    </div>

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">MARKETING</span>
        </div>
      </nav>

      <div class="home-content">
        <div class="uploaded_area">
          <a>Uploaded Marketing Content</a>
          <div class="file_details">
            <div class="details">
              <a>2021/10/09</a>
              <div class="file">
                <div class="file_icon">
                  <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i>
                </div>
                <div class="file_name">
                  <a>My file.png</a>
                </div>
              </div>
            </div>
            <div class="status">
              <a style="color: rgb(75, 224, 88);">Pending</a>
              <i class="fa fa-pause-circle-o fa-lg" aria-hidden="true" style="color: rgb(75, 224, 88);"></i>
            </div>
          </div>
        </div>
        <div class="submission_area">
          <div class="title"><a>Upload Your File</a></div>
          <<div class="sub_title"><a>(File should be JPG or PNG)</a>
        </div>
        <div class="submit_file">
          <i class="fa fa-upload fa-4x" aria-hidden="true"></i>
          <br><a>Drag & Drop</a>
          <br><a>or</a>
          <br><a>Browse File to Upload</a>
        </div>
        <button tupe="submit">Upload</button>
      </div>
  </div>
  </section>
  </div>
  <?php linkJS("vendor/spMarketing"); ?>
</body>

</html>