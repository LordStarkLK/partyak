<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
    <?php linkCSS("admin/adminUsers"); ?>
    
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <span class="dashboard">USERS</span>
      </div>
   
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box" id="box-customer">
        
          
          <img class="customer-image" <?php srcIMG("consumer.png") ?> width="40" height="40">
            <div class="box-topic">Customers</div>
          
          
          <!-- <i class='bx bxs-user cart'></i> -->
        </div>
        <div class="box" id="box-service">
          
            <img class="service-image" <?php srcIMG("service.png") ?> width="40" height="40">
            <div class="box-topic">Service Providers</div>
          
          <!-- <i clss='bx bxs-user-rectangle cart two' ></i> -->
        </div>
        <div class="box" id="box-event">
          
            <img class="event-image" <?php srcIMG("event.png") ?> width="40" height="40">   
            <div class="box-topic">Event Planners</div>
          
          
        </div>
      </div>

      <div>
      <ul class="breadcrumb">
        <li><a href="#">Users</a></li>
        <li><a href="#">Service Providers</a></li>
        </ul>

        <div class="search-container">
          <form action="/action_page.php">
          <input type="text" placeholder="Search Users.." name="search">
         
          <button type="submit"><i class="fa fa-search"></i></button>
          <!-- <i class="fas fa-search"></i> -->
         
          
    </form>
  </div>
        
        
      </div>



      <ul class="breadcrumb">
  
</ul>

      <div class="sales-boxes">
        
        <table>
  <tr>
    <th>Service Provider ID</th>
    <th>Service Name</th>
    <th>Email</th>
    <th>Service Type</th>
    <th>More Actions</th>

  </tr>
  <tr>
    <td>01</td>
    <td>Griffin</td>
    <td>griffin@gmail.com</td>
    <td>griffin@gmail.com</td>
    <td>Null</td>
  </tr>
  <tr>
    <td>02</td>
    <td>Forrest</td>
    <td>forrest@gmail.com</td>
    <td>photography</td>
    <td>Null</td>
  </tr>
  <tr>
    <td>03</td>
    <td>Swanson</td>
    <td>swanson@gmail.com</td>
    <td>Decorations</td>
    <td>Null</td>
  </tr>
  <tr>
    <td>04</td>
    <td>Brown</td>
    <td>brown@gmail.com</td>
    <td>Musician</td>
    <td>Null</td>
</tr>
<tr>
    <td>05</td>
    <td>JK photography</td>
    <td>jkphoto@gmail.com</td>
    <td>venue</td>
    <td>Null</td>
  </tr>

</table>
          
        
        
  </section>
</div>

<?php linkJS("adminHomeView"); ?>


  

</body>
</html>