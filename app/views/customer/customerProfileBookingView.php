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
            $today=date('Y-m-j');
            $i = 1;
            while($row=mysqli_fetch_assoc($data['bookingDetail'])){
              $row2=mysqli_fetch_assoc($data['paymentDetails']); 
              echo"
                <tr>
                  <td>$i</td>
                  <td>$row[service_type]</td>
                  <td>$row[service_name]</td>
                  <td>$row[event_date]</td>
                  <td>$row[status]</td>
                  <td>";
                  if($row2['p_status']){
                    echo $row2['p_status'];
                  }else{
                    echo "Not paid";
                  }
                  echo"
                  </td>
                  <td>";
                  if($row2['amount']){
                    echo $row2['amount'];
                  }else{
                    echo"Not paid";
                  }
                  echo"
                  </td>
                  <td>Completed</td>
                  <td class=\"btn-row\">
                    <button class=\"edit-booking\"><a href=\" ".BASEURL . "/payment/paymentDet/$row[booking_id]\">Go</a></button>
                  </td>               
                  <td class=\"btn-row\"> 
                    <button class=\"cancel-event\" onclick=\"document.getElementById('$row[booking_id]').style.display='block'\">Cancel</button> ";
                    $diff=strtotime($row['event_date']) - strtotime($today);
                    $dateCount=round($diff / 86400);

                    if ($row['status'] == "Accepted"){

                      if($dateCount > $row['cancellation_policy'] ){
                        echo"
                          <div id=\"$row[booking_id]\" class=\"modal\">
                            <span onclick=\"document.getElementById('$row[booking_id]').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
                            <form class=\"modal-content\" action=\"/action_page.php\">
                              <div class=\"container-modal\">
                                <h1>Cancel Booking?</h1>
                                <br><br><p>Are you sure you want to cancel your booking?</p>
                          
                                <div class=\"clearfix\">
                                  <button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('$row[booking_id]').style.display='none'\">No</button>
                                  <button type=\"button\" class=\"deletebtn\" onclick=\"window.location=' " . BASEURL . "/customerProfileBooking/deleteBooking/$row[booking_id]'\">Yes</button>
                                </div>
                              </div>
                            </form>
                          </div>";
                      }else{
                        echo"
                          <div id=\"$row[booking_id]\" class=\"modal\">
                            <span onclick=\"document.getElementById('$row[booking_id]').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
                            <form class=\"modal-content\" action=\"/action_page.php\">
                              <div class=\"container-modal\">
                                <h1>Cancel Booking.</h1>
                                <br><br><p>You cann't cancel your booking because of the service cancellation policy.</p>
                          
                                <div class=\"clearfix\">
                                  <button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('$row[booking_id]').style.display='none'\">OK</button>
                                </div>
                              </div>
                            </form>
                          </div>";
                      }

                    }
                    else{
                      echo"
                          <div id=\"$row[booking_id]\" class=\"modal\">
                            <span onclick=\"document.getElementById('$row[booking_id]').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
                            <form class=\"modal-content\" action=\"/action_page.php\">
                              <div class=\"container-modal\">
                                <h1>Cancel Booking.</h1>
                                <br><br><p>Are you sure you want to cancel your booking?</p>
                          
                                <div class=\"clearfix\">
                                  <button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('$row[booking_id]').style.display='none'\">No</button>
                                  <button type=\"button\" class=\"deletebtn\" onclick=\"window.location=' " . BASEURL . "/customerProfileBooking/deleteBooking/$row[booking_id]'\">Yes</button>
                                </div>
                              </div>
                            </form>
                          </div>";
                      

                    }
                    
                    echo"
                  </td>
                <tr>";
                
            $i++;
          }?>

         
        
      </table>
    </div>
     
   </div>
   </div>

   <?php linkPhp("footer") ?>
    
</body>
</html>