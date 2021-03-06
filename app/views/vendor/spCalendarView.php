<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <?php linkCSS("vendor/spCalendar"); ?>
    <?php linkCSS("navigation"); ?>
  <?php linkCSS("footer");?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php $service_id = $data['service_id'];?>
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
              <span class="links_name">
              <?php if($data['userType']['service_type']=="eventPlanner"){ ?>
              Service<?php }else{ ?>
                Packages
             <?php } ?>
            
            </span>
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
          <?php if($data['userType']['service_type']=="eventPlanner"){ ?>
          <div class="epOnlySidebar">
            <li>
              <a href="<?php echo BASEURL . '/epNoteNew/index/'.$service_id.''; ?>">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <span class="links_name">Note</span>
              </a>
            </li>
            <li>
              <a href="<?php echo BASEURL . '/epNewMyEvent/index/'.$service_id.''; ?>">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <span class="links_name">My Event</span>
              </a>
            </li>
          </div> <?php } ?>
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
  <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

  <?php linkJS("vendor/spCalendar"); ?>
  <?php linkPhp("footer") ?>
 
</body>
</html>