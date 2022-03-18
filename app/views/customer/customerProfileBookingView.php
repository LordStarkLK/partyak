<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Booking Details</title>
    <?php linkCSS("customer/customerProfileBookingView"); ?>
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
            <p>My  Booking  Details</p>
            <a href="<?php echo BASEURL . '/customerProfile'; ?>">Back to profile</a>
        </div>


    <div class="cusevent">
    <table class="table-content">
          <tr>

            <th>Booking_No</th>
            <th>Vendor Type</th>
            <th>Vendor Name</th>
            <th>Event Date</th>
            <th>Booking Request Status</th>
            <th>Payment Status</th>
            <th>Paid Amount(LKR)</th>
            <th>Total Amount(LKR)</th>
            <th>Do Payment</th>
            <th>More Actions</th>
          </tr>


          <?php
            $i = 1;
            while($row=mysqli_fetch_assoc($data['bookingDetail']) ){
               
                echo"
                <tr>
                  <td>$i</td>
                  <td>$row[service_type]</td>
                  <td>$row[service_name]</td>
                  <td>$row[event_date]</td>
                  <td>$row[status]</td>
                  <td>Completed</td>
                  <td>Completed</td>
                  <td>Completed</td>
                  <td class=\"btn-row\">
                      <button class=\"edit-booking\"><a href=\" ".BASEURL . "/payment/paymentDet/$row[booking_id]\">Go</a></button>
                  </td>                 
                  <td class=\"btn-row\">
                      <button class=\"cancel-booking\">Cancel</button>
                  </td>";
                
            $i++;
          }?>

         
        
      </table>
    </div>
     
   </div>
   </div>

   <?php linkPhp("footer") ?>
    
</body>
</html>