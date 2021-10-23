<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer.Planevent.Myevent.css">
    <title>Document</title>
    <?php linkCSS("customer/customerMyEventView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
</head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>

    </header>

    <div class="content">
    
    <div class="container">
        <div class="custopic">
            <p>My Events</p>
        </div>



    <table class="cusevent">
      <div class="cusraw1">
        <table>
        <tr>
          <th>Event ID</th>
          <th>Event Name</th>
          <th>Event Type</th>
          <th>Location</th>
          <th>Date & Time</th>
          <th>Number of Guests</th>
          <th>Planning type</th>
          <th>Status</th>
          <th>Event Schedule Board</th>
          <th>More Actions</th>
        </tr>
      </div>

          <?php
            $i = 1;
            while($row=mysqli_fetch_assoc($data['eventDetail']) ){
                echo"
                <tr>
                  <td>$i</td>
                  <td>$row[event_name]</td>
                  <td>$row[event_type]</td>
                  <td>$row[location]</td>
                  <td>$row[start_date] to $row[end_date]</td>
                  <td>$row[noOfGuest]</td>
                  <td>$row[plan_type]</td>
                  <td>Upcoming</td>
                  <td><button class=\"go-event\"><a href =\" ".BASEURL ."/customerEventSB\">Go</a></button></td>
        
                  
                  <td>  
                  <div class=\"btn-group\">
                      <button class=\"edit-event\">Edit</button>
                      <button class=\"cancel-event\">Cancel</button>
                      
                    </div>

                  
                  </td>
                </tr>   
                ";
            $i++;
          }?>
       
      </table>
     
   </div>
     
   </div>

   <?php linkPhp("footer") ?>
    
    
</body>
</html>