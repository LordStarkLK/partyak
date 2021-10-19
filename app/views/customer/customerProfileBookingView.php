<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
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
  <div class="container">

      

        <div class="custopic">
            <p>My  Booking  Details</p>
        </div>


    <div class="cusevent">
    <table class="table-content">
          <tr>
            <th>Booking_ID</th>
            <th>Vendor</th>
            <th>Vendor Name</th>
            <th>Event_Date</th>
            <th>Booking Request Status</th>
            <th>Payment_Status</th>
            <th>More Actions</th>
          </tr>
  
         <tr>
            <td>01</td>
            <td>Salon</td>
            <td>Jaal Salon</td>
            <td>10.08.2020</td>
            <td>Accepted</td>
            <td>Completed</td>
            <td class="btn-row">
                <button class="edit-booking">Edit</button>
                <button class="cancel-booking">Cancel</button>
            </td>
            
          </tr>

          <tr>
            <td>02</td>
            <td>Photographer</td>
            <td>DARKEYE</td>
            <td>31.10.2020</td>
            <td>Accepted</td>
            <td>Pending</td>
            <td class="btn-row">
                <button class="edit-booking">Edit</button>
                <button class="cancel-booking">Cancel</button>
            </td>
            
          </tr>

          <tr>
            <td>03</td>
            <td>Venues & Halls</td>
            <td>8 Degree</td>
            <td>20.11.2020</td>
            <td>Accepted</td>
            <td>Pending</td>
            <td class="btn-row">
                <button class="edit-booking">Edit</button>
                <button class="cancel-booking">Cancel</button>
            </td>
            
          </tr>

          <tr>
            <td>04</td>
            <td>Catering Service</td>
            <td>Dushan Catering</td>
            <td>25.11.2020</td>
            <td>Pending</td>
            <td>Pending</td>
            <td class="btn-row">
                <button class="edit-booking">Edit</button>
                <button class="cancel-booking">Cancel</button>
            </td>
            
          </tr>
         
        
      </table>
    </div>
     
   </div>

   <?php linkPhp("footer") ?>
    
</body>
</html>