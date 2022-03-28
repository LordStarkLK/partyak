<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    
    <?php linkCSS("admin/adminHome"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php
        $overall = 0;
        while($row = mysqli_fetch_assoc($data['monthly_sales'])){
        $total[] = $row['total'];
        $overall = $overall + $row['total'];
  }
?> 

   </head>
<body>
<div class="container">
  <?php linkPHP("adminSidebar");?>
  <section class="home-section">
    
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
        <span class="dashboard">ANALYTICS</span>
      </div>
   <!-- Detail showing area -->
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="number"><?php echo $data['user_total']; ?></div>
            <div class="box-topic">Registered Users</div>
          </div>
          <i class='bx bxs-user cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="number"><?php echo $data['vendor_total']; ?></div>
            <div class="box-topic">Registered Vendors</div>
          </div>
          <i class='bx bxs-user-rectangle cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="number"><?php echo $data['customer_total']; ?></div>
            <div class="box-topic">Registered Customers</div>
          </div>
          <i class='bx bxs-user-rectangle cart three' ></i>
        </div>
      </div>
      <!-- Chart area -->
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Sales Summery</div>
          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
          <div class="sales-details">
            
          </div>
          </div>
          <div class="top-sales box">
                <div class="daily-details">
                    <a class = "name">Total Sales</a><br>
                    <a class ="amount">LKR.<?php echo number_format($overall,2,'.',',') ?></a>
                </div>
                <div class="monthly-details">
                    <a class = "name">Monthly</a><br>
                    <a class ="amount">LKR.<?php echo number_format(end($total),2,'.',',') ?></a>
                </div> 
          </div>
        </div>
        <div class="overview-boxes">
            <div class="box">
              <div class="right-side">
                <div class="number"><?php echo $data['booking_total']; ?></div>
                <div class="box-topic">Total Bookings</div>
              </div>
              <i class='bx bxs-user-plus cart three'></i>
            </div>
            <div class="box">
              <div class="right-side">
                <div class="number"><?php echo $data['event_total']; ?></div>
                <div class="box-topic">New Events</div>
              </div>
              <i class='bx bxs-user-plus cart' ></i>
            </div>
            <div class="box">
              <div class="right-side">
                <div class="number"><?php echo $data['service_total']; ?></div>
                <div class="box-topic">Total Services</div>
              </div>
              <i class='bx bxs-user-detail cart two' ></i>
            </div>
          </div>
      </div>
  </section>
</div>

<!-- Getting values for the chart js -->
<script>
  var xValues = ["January 2022", "February 2022", "March 2022"];
  var yValues = [<?php echo $total[0] ; ?> , <?php echo $total[1] ?>, <?php echo $total[2]; ?>];
  var barColors = ["#e6817a", "#e44e43","#a0160c"];
</script>

<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>

<?php linkJS("admin/notification"); ?>
<?php linkJS("adminHomeView"); ?>


  

</body>
</html>