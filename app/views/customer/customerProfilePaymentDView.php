<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Payment Details</title>
    <?php linkCSS("customer/customerProfilePaymentD"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="Customer.browse.SearchVendor.css"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <header>
    <?php linkPhp("customerNavigation") ?>
  </header>


  <div class="content">

  <div class="container">
    <div class="custopic">
      <p>My Payment Details</p>
      <a href="<?php echo BASEURL . '/customerProfile'; ?>">Back to profile</a>
    </div>

    <div class="cusevent">
    <table>
      <div class="cusraw1">
        <tr>
          <th>Payment No</th>
          <th>Vendor</th>
          <th> Date</th>
          <th>Payment Status</th>
          <th>Paid Amount(LKR)</th>
          <th>Total Amount(LKR)</th>
          <th>Action</th>
        </tr>
      </div>

      <tr>
          <td>01</td>
          <td>Jaal Salon</td>
          <td>10.08.2021</td>
          <td>Full Payment</td>
          <td>8000.00</td>
          <td>30000.00</td>  
          <td> <button class="go-payment">Go</button></td>     
        </tr>
        
        <tr>
          <td>02</td>
          <td>8 Degree</td>
          <td>19.11.2021</td>
          <td>Advanced Paid</td>
          <td>50000.00</td>
          <td>300000.00</td>  
          <td> <button class="go-payment">Go</button></td>     
        </tr>

        <tr>
          <td>03</td>
          <td>JK Photography</td>
          <td>10.12.2021</td>
          <td>Advanced Paid</td>
          <td>5000.00</td>
          <td>25000.00</td>  
          <td> <button class="go-payment">Go</button></td>     
        </tr>
 
        
      </table>
    </div>
     
   </div>


  </div>

  <?php linkPhp("footer") ?>

</body>
</html>