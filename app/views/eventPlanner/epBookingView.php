<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("eventPlanner/epBooking"); ?>
  <?php linkCSS("navigation"); ?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <?php linkPhp("vendorNavigation") ?>
  </header>
  <div class="container">
    <?php linkPhp("epSideBar") ?>

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
                  <!-- <th>Pacakge</th> -->
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Kamal</th>
                  <th>Wedding</th>
                  <th>300</th>
                  <th>2020-10-10</th>
                  <!-- <th>Summer Package</th> -->
                  <th class="btn-row">
                    <button class="accept-booking">Accept</button>
                    <button class="reject-booking">Reject</button>
                  </th>
                </tr>
                <tr>
                  <th>Sunil</th>
                  <th>Wedding</th>
                  <th>300</th>
                  <th>2020-10-10</th>
                  <!-- <th>Summer Package</th> -->
                  <th class="btn-row">
                    <button class="accept-booking">Accept</button>
                    <button class="reject-booking">Reject</button>
                  </th>
                </tr>
                <tr>
                  <th>Nimal</th>
                  <th>Party</th>
                  <th>300</th>
                  <th>2020-10-10</th>
                  <!-- <th>Summer Package</th> -->
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
                <!-- <th>Service</th> -->
                <th>Event Date</th>
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
                <!-- <th>Venues & Halls</th> -->
                <th>2020-10-10</th>
                <th>120000</th>
                <th>45000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>2</th>
                <th>Namal</th>
                <th>n@gmail.com</th>
                <!-- <th>Venues & Halls</th> -->
                <th>2020-10-11</th>
                <th>120000</th>
                <th>35000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>3</th>
                <th>Amal</th>
                <th>a@gmail.com</th>
                <!-- <th>Venues & Halls</th> -->
                <th>2020-10-15</th>
                <th>120000</th>
                <th>20000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>4</th>
                <th>Kamal</th>
                <th>k@gmail.com</th>
                <!-- <th>Venues & Halls</th> -->
                <th>2020-10-10</th>
                <th>120000</th>
                <th>20000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>5</th>
                <th>Kamal</th>
                <th>k@gmail.com</th>
                <!-- <th>Venues & Halls</th> -->
                <th>2020-10-25</th>
                <th>120000</th>
                <th>20000</th>
                <th>In progress</th>
              </tr>
            </tbody>
          </table>
        </div>


      </div>
    </section>
  </div>
   <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

  <?php linkJS("vendor/spBooking"); ?>
</body>

</html>