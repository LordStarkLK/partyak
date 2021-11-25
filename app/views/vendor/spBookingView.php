<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("vendor/spBooking");  ?>
  <?php linkCSS("navigation"); ?>
  <?php linkCSS("footer");?>
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
        <!-- <li>
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
        </li> -->
        <li>
          <a href="<?php echo BASEURL . '/spService'; ?>">
            <i class="fa fa-server" aria-hidden="true"></i>
            <span class="links_name">Packages</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spBooking'; ?>">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="links_name">Bookings</span>
          </a>
        </li>
        <!-- <li>
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
        </li> -->
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
          <span class="dashboard">BOOKINGS</span>
        </div>
      </nav>
      <div class="home-content">
      <div class="bookings-requests">
          <a>Booking Requests</a>
          <div class="bookings-requestTable">
            <table class="table-content">
              <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Event Type</th>
                  <th>Guest Count</th>
                  <th>Event Date</th>
                  <th>Pacakge</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Kamal Perera</th>
                  <th>Wedding</th>
                  <th>300</th>
                  <th>2020-10-29</th>
                  <th>Summer Package</th>
                  <th class="btn-row">
                    <button class="accept-booking">Accept</button>
                    <button class="reject-booking">Reject</button>
                  </th>
                </tr>
                <tr>
                  <th>Nimal Gamage</th>
                  <th>Party</th>
                  <th>100</th>
                  <th>2020-10-30</th>
                  <th>Gold Package</th>
                  <th class="btn-row">
                    <button class="accept-booking">Accept</button>
                    <button class="reject-booking">Reject</button>
                  </th>
                </tr>
                <tr>
                  <th>Nayana Kumari</th>
                  <th>Wedding</th>
                  <th>300</th>
                  <th>2020-11-10</th>
                  <th>Summer Package</th>
                  <th class="btn-row">
                    <button class="accept-booking">Accept</button>
                    <button class="reject-booking">Reject</button>
                  </th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="search-bookings">
          <input type="text" placeholder="Search" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
        <div class="filter-date-status">

        </div>
        <div class="bookings-table">
          <table class="table-content">
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Service</th>
                <th>Recerved Date</th>
                <th>Total Amount (LKR)</th>
                <th>Paid Amount (LKR)</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <th>Kamal</th>
                <th>k@gmail.com</th>
                <th>Venues & Halls</th>
                <th>2020-11-10</th>
                <th>120000</th>
                <th>45000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>2</th>
                <th>Namal</th>
                <th>n@gmail.com</th>
                <th>Venues & Halls</th>
                <th>2020-12-11</th>
                <th>120000</th>
                <th>35000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>3</th>
                <th>Amal</th>
                <th>a@gmail.com</th>
                <th>Caterings</th>
                <th>2020-11-15</th>
                <th>50000</th>
                <th>20000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>4</th>
                <th>Kamal</th>
                <th>k@gmail.com</th>
                <th>Venues & Halls</th>
                <th>2020-10-10</th>
                <th>120000</th>
                <th>120000</th>
                <th>Completed</th>
              </tr>
              <tr>
                <th>5</th>
                <th>Kasun</th>
                <th>k@gmail.com</th>
                <th>Caterings</th>
                <th>2020-10-01</th>
                <th>120000</th>
                <th>120000</th>
                <th>Completed</th>
              </tr>
            </tbody>
          </table>
        </div>

        
      </div>
    </section>
  </div>
  <?php linkJS("vendor/spBooking"); ?>
  <?php linkPhp("footer") ?>
</body>

</html>