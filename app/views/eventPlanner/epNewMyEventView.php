<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("vendor/spReview"); ?>
  <?php linkCSS("eventPlanner/epMyEvent"); ?>
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
          <span class="dashboard">My Event</span>
        </div>
      </nav>
      <div class="home-content">
        <?php if(isset($data['event'])){foreach ($data['event'] as $row) { ?>
              <div class="glass-card-section">
                  <div class="glass card">
                      <h1 class="card-date"><?php echo $row['month']."/". $row['date']?></h1>
                      <span class="card-description">
                          <p class="description-title"><?php echo $row['event_type'] ?></p>
                          <p class="description-place"><?php echo $row['location'] ?></p>
                      </span>
                      <span class="card-button">
                          <a href="<?php echo BASEURL . '/epMyEventEvents/index/'; echo $row["event_page_id"]; ?>"><button class="card-btn">View</button></a>
                      </span>
                      <?php
                        if(($row['user_id']==$_SESSION['userId'])){ ?>
                                <form action="<?php echo BASEURL . '/epNewMyEvent/delEvent'; ?>" method="POST">
                                    <input type="hidden" id="noteId" name="eventId" value="<?php echo $row["event_page_id"] ?>">
                                    <button type="submit" class="delete-note-text">Delete Event</button>
                                </form>
                      <?php  } ?>
                  </div>
              </div> <?php }} ?>
              <div class="add-note-div">
                  <h3 class="add-note">Add an event</h3>
                  <a href="<?php echo BASEURL . '/epEventAdd/index/'.$service_id.''; ?>"><img class="add-btn" <?php srcIMG("addButton.png") ?>></a>
              </div>
       </div>
    </section>
  </div>
  <?php linkJS("vendor/spReview"); ?>
  <!-- <?php linkPhp("footer") ?> -->
</body>

</html>