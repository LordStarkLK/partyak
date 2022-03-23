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
  <?php $wallet = mysqli_fetch_assoc($data["wallet"]); ?>
</head>

<body>
  <header>
    <?php linkPhp("Navigation") ?>
  </header>
  <div class="container">
    
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
            <a>: <?php echo "Rs.".number_format($wallet['amount'],2,'.',',').""?></a>
          </div>
        </div>
        <div class="overview-boxes">
          <div class="box">
            <a>Withdrawable money</a>
          </div>
          <div class="box">
            <a>: <?php echo "Rs.".number_format($wallet['withdrawable_amount'],2,'.',',').""?></a>
          </div>
        </div>
        <!-- <div class="overview-boxes">
          <div class="box">
            <a>On hold money</a>
          </div>
          <div class="box">
            <a>: LKR 25 000</a>
          </div>
        </div> -->
      </div>
      <div class="payment">
        <a>Need early payments,</a>
        <div class="request-payment">
          <button id="request-button" class="button">Request Payment</button>
        </div>
      </div>
      <div class="transaction-boxes">
        <a class="title"> Recent Payments</a>
        <table class="table-content">
          <thead>
            <tr>
              <th>Payment Id</th>
              <th>Description</th>
              <th>Date</th>
              <th>Amount (LKR)</th>
            </tr>
          </thead>
          <tbody>
            
              <?php while($row = mysqli_fetch_assoc($data['payment'])){
                echo "
                <tr>
                <th>$row[payment_id]</th>
                <th>$row[status]</th>
                <th>$row[payment_date]</th>
                <th>Rs.".number_format($row['amount'],2,'.',',')."</th>
                </tr>
                ";
              }

              ?>

        </tbody>
        </table>
      </div>
      
      
      
            
              <?php 
              if($data['settlement']){
                echo "
                <div class=\"transaction-boxes\">
                <a class=\"title\"> Recent Settlements</a>
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
      
            
            <!-- <tr>
              <th>2</th>
              <th>Deposit</th>
              <th>Monthly payment</th>
              <th>1234</th>
              <th>BOC</th>
              <th>19-08-2021</th>
              <th>30000</th>
            </tr> -->
            <!-- <tr>
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
            </tr> -->
          
      
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