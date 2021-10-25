<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <?php linkCSS("vendor/spCalendar"); ?>
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
        <span class="dashboard">CALENDAR</span>
      </div>
    </nav>

    <div class="home-content">
        <a >Your schedule here!</a>
        <div class="content">
            <div class="calendar-container">
                <!-- <div class="year">
                    2021
                </div> -->
                <div class="mycalendar">
                  <div class="calendar">
                    <div class="month">
                      <i class="fa fa-angle-left prev"></i>
                      <div class="date">
                        <h1></h1>
                        <!-- <p></p> -->
                      </div>
                      <i class="fa fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                      <div>Sun</div>
                      <div>Mon</div>
                      <div>Tue</div>
                      <div>Wed</div>
                      <div>Thu</div>
                      <div>Fri</div>
                      <div>Sat</div>
                    </div>
                    <div class="days"></div>
                  </div>
                </div>
            </div>
            <div class="calendarNotes">
                <a>Schedule of the day</a>
                <div class="schedule">
                    <div class="selectday">
                        07 Sept 2021
                    </div>
                    <div class="notes">
                        <a class="service_type"><i class="fa fa-angle-double-right fa-lg" aria-hidden="true"></i>Venue & Halls</a>
                        <br><a class="service_name">Hotel : Mount Lavinia</a>
                    </div>
                </div>
                <div class="addnote">
                  <button class="nbtn">Add Note</button>
              </div>
            </div>
        </div>
    </div>
</section>
</div>

  <?php linkJS("vendor/spCalendar"); ?>
 
</body>
</html>