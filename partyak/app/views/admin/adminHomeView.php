<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
    <?php linkCSS("adminHomeView"); ?>
    
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
  <div class="sidebar">
    
      <ul class="nav-links">
        <li>
            <a href="#">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">Analytics</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-user' ></i>
              <span class="links_name" onclick="window.location='<?php echo BASEURL . '/adminUsers'; ?>'">Users</span>
            </a>
          </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Bookings</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Marketing</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Payments</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-plus' ></i>
            <span class="links_name">Requests</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Chat</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-calendar' ></i>
            <span class="links_name">Calendar</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-star' ></i>
            <span class="links_name">Review</span>
          </a>
        </li>
        <li class="log_out">
          <a href= "<?php echo BASEURL . '/logout';?>">
          <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
        <span class="dashboard">ANALYTICS</span>
      </div>
   
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="number">40,876</div>
            <div class="box-topic">Registered Users</div>
          </div>
          <i class='bx bxs-user cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="number">1,876</div>
            <div class="box-topic">Registered Vendors</div>
          </div>
          <i class='bx bxs-user-rectangle cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="number">35</div>
            <div class="box-topic">Messages</div>
          </div>
          <i class='bx bxs-message cart three' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Sales Summery</div>
          <div class="sales-details">
            
          </div>
          </div>
          <div class="top-sales box">
                <div class="daily-details">
                    <a class = "name">Daily</a><br>
                    <a class ="amount">2 506</a>
                </div>
                <div class="monthly-details">
                    <a class = "name">Monthly</a><br>
                    <a class ="amount">98 765</a>
                </div> 
          </div>
        </div>
        <div class="overview-boxes">
            <div class="box">
              <div class="right-side">
                <div class="number">45</div>
                <div class="box-topic">New Users</div>
              </div>
              <i class='bx bxs-user-plus cart three'></i>
            </div>
            <div class="box">
              <div class="right-side">
                <div class="number">12</div>
                <div class="box-topic">New Vendors</div>
              </div>
              <i class='bx bxs-user-plus cart' ></i>
            </div>
            <div class="box">
              <div class="right-side">
                <div class="number">103,932</div>
                <div class="box-topic">Daily Visits</div>
              </div>
              <i class='bx bxs-user-detail cart two' ></i>
            </div>
          </div>
      </div>
  </section>
</div>

<?php linkJS("adminHomeView"); ?>


  

</body>
</html>