<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("vendor/spReview"); ?>
  <?php linkCSS("eventPlanner/epNewNote"); ?>
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
      </ul>
    </div>

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">NOTE</span>
        </div>
      </nav>
      <div class="home-content">
              <div class="note-content-area">

              </div>
              <div class="add-note">
                <a href="<?php echo BASEURL . '/epNoteNewAdd/index/'.$service_id.''; ?>"><button class="btn" >Add Note</button></a>
              </div>
            </div>
    </section>
  </div>
  <?php linkJS("vendor/spReview"); ?>
  <!-- <?php linkPhp("footer") ?> -->
</body>

</html>