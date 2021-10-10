<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <?php linkCSS("vendor/spService");  ?>
    <?php linkCSS("vendorNavigation"); ?>
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
        <span class="dashboard">SERVICES</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="name-container">
          <div class="service">
                <button id="s_btn" class="serviceBtn">Our Services</button>    
          </div>
          <div class="package">
            <button id="p_btn" class="packageBtn">Our Packages</button>
          </div>
      </div>
      <div id="service" class="services-box">
        <table class="table-content">
          <thead>
            <tr>
              <th>Service Name</th>
              <th>Service Information</th>
              <th>Current Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Venues & Halls</th>
              <th><a href="#">Hikka Trans by Cinomon</a><br>Galle Rd, Hikkaduwa</th>
              <th>Pending</th>
              <th><button class="delete-service">Delete</button></th>
            </tr>
            <tr>
              <th>Venues & Halls</th>
              <th><a href="#">Nilwala Caterings</a><br>Galle Rd, Matara</th>
              <th>Pending</th>
              <th><button class="delete-service">Delete</button></th>
            </tr>
            <tr>
              <th>Venues & Halls</th>
              <th><a href="#">Hikka Trans by Cinomon</a><br>Galle Rd, Hikkaduwa</th>
              <th>Pending</th>
              <th><button class="delete-service">Delete</button></th>
            </tr>
            <tr>
              <th>Venues & Halls</th>
              <th><a href="#">Nilwala Caterings</a><br>Galle Rd, Matara</th>
              <th>Pending</th>
              <th><button class="delete-service">Delete</button></th>
            </tr>
          </tbody> 
        </table>
          <div class="add-service">
            <a>Add New Service </a>
            <button class="new-service"><i class="fa fa-plus" aria-hidden="true"></i></button> 
          </div>
        </div>              
        
        <div id="package" class="packages-box">
          <table class="table-content">
            <thead>
              <tr>
                <th>Package Name</th>
                <th>Service Name</th>
                <th>Package Information</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Summer Package</th>
                <th>Venues & Halls</th>
                <th><a href="#">View Info</a></th>
                <th class="btn-row">
                  <button class="edit-package">Edit</button>
                  <button class="delete-package">Delete</button>
                </th>
              </tr>
              <tr>
                <th>Buffet Package</th>
                <th>Venues & Halls</th>
                <th><a href="#">View Info</a></th>
                <th class="btn-row">
                  <button class="edit-package">Edit</button>
                  <button class="delete-package">Delete</button>
                </th>
              </tr>
              <tr>
                <th>Summer Package</th>
                <th>Venues & Halls</th>
                <th><a href="#">View Info</a></th>
                <th class="btn-row">
                  <button class="edit-package">Edit</button>
                  <button class="delete-package">Delete</button>
                </th>
              </tr>
            </tbody>               
          </table>
          <div class="add-package">
            <a>Add New Package </a>
            <button class="new-package"><i class="fa fa-plus" aria-hidden="true"></i></button> 
          </div>
        </div>
    </div>
  </section>
</div>
<?php linkJS("vendor/spService"); ?>

</body>
</html>