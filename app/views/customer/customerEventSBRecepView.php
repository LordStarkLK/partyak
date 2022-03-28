<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Recommandations of Event Planner</title>
    <?php linkCSS("customer/customerEventSBRecepView"); ?>
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
      <p>Recomndations of Event Planner</p>
      <!-- <a href="<?php echo BASEURL . '/customerEventSB/index/$eventS[planning_id]'; ?>">Event Schedule Board</a> -->
    </div>

    <div class="cusevent">
    <table>
      <div class="cusraw1">
        <tr>
          <th>Recommned No</th>
          <th>Service Type</th>
          <th>Recommanded Service Name</th>
          <th>Customer Prefer Status</th>
          <th>Advanced Payment Amount</th>
          <th>Full Payment Amount</th>
          <th>Payment Status</th>
          <th>Other Suggestions</th>
        </tr>
      </div>

      <?php
            $i = 1;
            while($row=mysqli_fetch_assoc($data['recomandDetail']) ){
               
                echo"
                <tr>
                  <td>$i</td>
                  <td>$row[service_type]</td>
                  <td>$row[recom_service_name]</td>
                  <td>Status</td>
                  <td>$row[adv_pay_amount]</td>
                  <td>$row[full_pay_amount]</td>
                  <td>$row[payment_status]</td>
                  <td>$row[other_suggest]</td>";

 
                echo"</tr>";   
                
            $i++;
      }?>
 
        
      </table>
    </div>
     
   </div>


  </div>

  <?php linkPhp("footer") ?>

</body>
</html>