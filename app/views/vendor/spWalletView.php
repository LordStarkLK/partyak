<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Service provider Wallet</title>
  <?php linkCSS("vendor/spWallet");  ?>
  <?php linkCSS("Navigation"); ?>
  <?php linkCSS("footer");?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <?php linkPhp("Navigation") ?>
  </header>
  <div class="container">
    <!-- <div class="sidebar">

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
    </div> -->
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <!-- <i class='bx bx-menu sidebarBtn'></i> -->
          <i class="fa fa-usd fa-2x" aria-hidden="true"></i>
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
          <button id="request-button" class="button">Request Payment</button>
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
            <!-- <tr>
              <th>2</th>
              <th>Deposit</th>
              <th>Monthly payment</th>
              <th>1234</th>
              <th>BOC</th>
              <th>19-08-2021</th>
              <th>30000</th>
            </tr> -->
            <tr>
              <th>2</th>
              <th>Deposit</th>
              <th>Request payment</th>
              <th>1234</th>
              <th>BOC</th>
              <th>01-08-2021</th>
              <th>30000</th>
            </tr>
            <tr>
              <th>3</th>
              <th>Withdraw</th>
              <th>Marketing</th>
              <th>1234</th>
              <th>BOC</th>
              <th>29-07-2021</th>
              <th>2000</th>
            </tr>
            <tr>
              <th>4</th>
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
<!-- The Modal -->
<div id="myModal" class="request-modal">

  <!-- Modal content -->
  <div class="modal-content">
    
    <span class="close">&times;</span>
    <form>
      <div class="request-details">
        <h2>Early Payment Request</h2>
        <p>
            Service provider name : Lara Fernando <br>
            Date : 27/10/2021 <br>
            Amount(LKR) :
        </p>
        
        <input id="request-amount" type="text" placeholder="Enter the amount" required>
      </div>
      <div class="request-submit-btn">
        <!-- <input id="request-submit" type="submit"> -->
        <button id="request-submit" type="submit">Submit</button>
      </div>
    <!-- <div id="request-submit" class="request-submit-btn">
      <input type="submit" value="Submit" >
    </div> -->
    </form>
    
    
  </div>

</div>

  <?php linkJS("vendor/spWallet"); ?>
  <?php linkPhp("footer") ?>

</body>

</html>