<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("eventPlanner/epAnalytics"); ?>
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
          <span class="dashboard">ANALYTICS</span>
        </div>
      </nav>
      <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Sales Summery</div>
            <div class="sales-details">

            </div>
          </div>
          <div class="chart">

            <div id="donutchart" class="pieChart"></div>

            <div class="chart-details">
              <a>Total income &emsp;&emsp; : 83,000</a><br>
              <a>Total charges&emsp;&emsp; : 6,000</a><br>
              <a>On-hold Money &emsp;: 27,000</a><br>
            </div>
          </div>
        </div>
        <div class="bookings-box">
          <a class="title"> Recent transactions</a>
          <table class="table-content">
            <thead>
              <tr>
                <th>Id</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Service</th>
                <th>Reserve date</th>
                <th>Total amount(LKR)</th>
                <th>Paid amount(LKR)</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <th>Amal</th>
                <th>amal@gmail.com</th>
                <th>Catering</th>
                <th>2021-10-05</th>
                <th>40000</th>
                <th>20000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>2</th>
                <th>Kamal</th>
                <th>kamal@gmail.com</th>
                <th>Catering</th>
                <th>2021-10-05</th>
                <th>40000</th>
                <th>20000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>3</th>
                <th>Nimal</th>
                <th>nimal@gmail.com</th>
                <th>Catering</th>
                <th>2021-10-01</th>
                <th>40000</th>
                <th>20000</th>
                <th>In progress</th>
              </tr>
              <tr>
                <th>4</th>
                <th>Namal</th>
                <th>namal@gmail.com</th>
                <th>Catering</th>
                <th>2021-09-01</th>
                <th>40000</th>
                <th>10000</th>
                <th>Cancelled</th>
              </tr>
              <tr>
                <th>5</th>
                <th>Sunil</th>
                <th>sunil@gmail.com</th>
                <th>Catering</th>
                <th>2021-08-29</th>
                <th>40000</th>
                <th>40000</th>
                <th>Completed</th>
              </tr>
              <tr>
                <th>6</th>
                <th>Nayana</th>
                <th>nay@gmail.com</th>
                <th>Catering</th>
                <th>2021-08-15</th>
                <th>40000</th>
                <th>40000</th>
                <th>Completed</th>
              </tr>
              <tr>
                <th>7</th>
                <th>Wasana</th>
                <th>was@gmail.com</th>
                <th>Catering</th>
                <th>2021-08-01</th>
                <th>40000</th>
                <th>40000</th>
                <th>Completed</th>
              </tr>
              <tr>
                <th>8</th>
                <th>Namal</th>
                <th>namal@gmail.com</th>
                <th>Catering</th>
                <th>2021-07-20</th>
                <th>40000</th>
                <th>10000</th>
                <th>Cancelled</th>
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

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <?php linkJS("vendor/spAnalytics"); ?>




</body>

</html>