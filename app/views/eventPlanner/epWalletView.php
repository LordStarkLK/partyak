<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Service provider Wallet</title>
  <?php linkCSS("eventPlanner/epWallet"); ?>
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
          <span class="dashboard">Wallet</span>
        </div>
      </nav>
      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <a>Total balance</a>
          </div>
          <div class="box">
            <a>: LKR 60 000</a>
          </div>
        </div>
        <div class="overview-boxes">
          <div class="box">
            <a>Withdrawable money</a>
          </div>
          <div class="box">
            <a>: LKR 45 000</a>
          </div>
        </div>
        <div class="overview-boxes">
          <div class="box">
            <a>On hold money</a>
          </div>
          <div class="box">
            <a>: LKR 25 000</a>
          </div>
        </div>
      </div>
      <div class="payment">
        <a>Need early payments,</a>
        <div class="request-payment">
          <button class="button">Request Payment</button>
        </div>
      </div>
      <div class="transaction-boxes">
        <a class="title"> Recent transactions</a>
        <table class="table-content">
          <thead>
            <tr>
              <th>Id</th>
              <th>Status</th>
              <th>Description</th>
              <th>Acc. NO</th>
              <th>Bank</th>
              <th>Date</th>
              <th>Amount (LKR)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <th>Deposit</th>
              <th>Monthly payment</th>
              <th>1234</th>
              <th>BOC</th>
              <th>19-09-2021</th>
              <th>30000</th>
            </tr>
            <tr>
              <th>2</th>
              <th>Deposit</th>
              <th>Monthly payment</th>
              <th>1234</th>
              <th>BOC</th>
              <th>19-08-2021</th>
              <th>30000</th>
            </tr>
            <tr>
              <th>3</th>
              <th>Deposit</th>
              <th>Request payment</th>
              <th>1234</th>
              <th>BOC</th>
              <th>01-08-2021</th>
              <th>30000</th>
            </tr>
            <tr>
              <th>4</th>
              <th>Withdraw</th>
              <th>Marketing</th>
              <th>1234</th>
              <th>BOC</th>
              <th>29-07-2021</th>
              <th>2000</th>
            </tr>
            <tr>
              <th>5</th>
              <th>Deposit</th>
              <th>Monthly payment</th>
              <th>1234</th>
              <th>BOC</th>
              <th>19-07-2021</th>
              <th>30000</th>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

  <?php linkJS("vendor/spWallet"); ?>
</body>

</html>