<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("vendor/spAnalytics");  ?>
  <?php linkCSS("navigation"); ?>
  <?php linkCSS("footer");?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $payment = mysqli_fetch_assoc($data["payment"]); ?>
  <?php $income = $data["income"]; ?>
</head>


<body>
  <header>
    <?php linkPhp("navigation") ?>
  </header>
  <div class="container">
    

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <!-- <i class='bx bx-menu sidebarBtn'></i> -->
          <i class="fa fa-pie-chart" aria-hidden="true"></i>
          <span class="dashboard">ANALYTICS</span>
        </div>
      </nav>
      <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Sales Summery</div>
            <div class="sales-details">
              <canvas id="myChart" style="width:100%; min-width:500px; height:500px"></canvas>
            </div>
          </div>
          
        </div>
        <div class="sales-boxes">
          <div class="chart">

            <div id="donutchart" class="pieChart"></div>

            <div class="chart-details">
              <a>Total income &emsp;&emsp; : <?php echo "Rs.".number_format($payment['amount'],2,'.',',').""?></a><br>
              <a>Total charges&emsp;&emsp; : <?php 
              $charges=$payment['amount']-$payment['withdrawable_amount'];
              echo "Rs.".number_format($charges,2,'.',',').""?></a><br>
              <a>Withdrawable &emsp;&emsp;: <?php echo "Rs.".number_format($payment['withdrawable_amount'],2,'.',',').""?></a><br>
            </div>
          </div>
        </div>
        
        
        <?php 
          if($data['settlement']){
            echo "
              <div class=\"bookings-box\">
                <a class=\"title\">Recent Settlements</a>
                <table class=\"table-content\">
                  <thead>
                    <tr>
                      <th>Payment Id</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Amount (LKR)</th>
                    </tr>
                  </thead>
                <tbody>
                
            ";

                while($row = mysqli_fetch_assoc($data['settlement'])){
                  echo "
                  <tr>
                  <th>$row[payment_id]</th>
                  <th>$row[description]</th>
                  <th>$row[date]</th>
                  <th>Rs.".number_format($row['amount'],2,'.',',')."</th>
                  </tr>
                  ";
                }
  
                
  
              }

              ?>
              </tbody>
        </table>
      </div>
    </section>
  </div>
  <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
<!-- <script type="text/javascript" >

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    // $i=$payment['amount'];
    // $w=$payment['withdrawable_amount'];
    // $c=$

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['sales', 'amount'],
      ['Income', 70000],
      ['Charges', 5000],
      ['withdrawable', 20000],
      
    ]);
    
      // Optional; add a title and set the width and height of the chart
      var options = {
              pieHole: 0.6,
              backgroundColor: 'black',
              legend: {alignment: 'center', position: 'right', textStyle: {color: 'white', fontSize: 16}},
              chartArea: {left:20,top:10,width:'100%',height:'100%'},
            };
      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }    

    //sales summary chart
var xValues = ["Jan","Feb","Mar","Apr","May","Jun","July"];
// var yValues = [3000,10000,5000,18000,40000,60000,50000,55000,80000,65000];

var yValues = [<?php echo $income[0];?>,<?php echo $income[1];?>,<?php echo $income[2];?>,<?php echo $income[3];?>,<?php echo $income[4];?>,<?php echo $income[5];?>,<?php echo $income[6];?>]

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "white",
      borderColor: "blue",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 10000, max:1000000}}],
    }
  }
});
  
</script> -->

<script type="text/javascript">
      var ctx = document.getElementById("myChart").getContext('2d');
      var barColors = ["#e44ab5", "blue","orange","brown"];
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($income[0]); ?>,
                        datasets: [{
                          fill: false,
                        lineTension: 0,
                        backgroundColor: barColors,
                        borderColor: "#84cddf",
                            data:<?php echo json_encode($income[1]); ?>,
                        }]
                    },
                    options: {
                        legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: 'white',
                            fontFamily: 'Poppins',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });


    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    // $i=$payment['amount'];
    // $w=$payment['withdrawable_amount'];
    // $c=$

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['sales', 'amount'],
      ['Income', <?php echo $payment['amount']; ?>],
      
      ['withdrawable', <?php echo $payment['withdrawable_amount']; ?>],
      ['Charges',  <?php echo $payment['amount'] - $payment['withdrawable_amount']; ?>],
      
    ]);
    
      // Optional; add a title and set the width and height of the chart
      var options = {
              pieHole: 0.6,
              backgroundColor: 'black',
              legend: {alignment: 'center', position: 'right', textStyle: {color: 'white', fontSize: 16}},
              chartArea: {left:20,top:10,width:'100%',height:'100%'},
            };
      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    } 





    </script>

  <?php linkJS("vendor/spAnalytics"); ?>
  <?php linkPhp("footer") ?>
</body>
</html>