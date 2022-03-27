<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Payment Details</title>
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
      <a href="<?php echo BASEURL . '/customerEventSB'; ?>">Event Schedule Board</a>
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

      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>  
          <td> </td>
          <td> </td>       
      </tr>

      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>  
          <td> </td>
          <td> </td>       
      </tr>

      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>  
          <td> </td>
          <td> </td>       
      </tr>
        
        
 
        
      </table>
    </div>
     
   </div>


  </div>

  <!-- Notification adding -->
<?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>

  <?php linkPhp("footer") ?>

</body>
</html>