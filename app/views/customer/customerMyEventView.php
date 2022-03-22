<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer.Planevent.Myevent.css">
    <title>My Event</title>
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
                $date = date('Y-m-d');


                if($date < $row['start_date']){
                  $status = 'Upcomming';
                
                }
                
                if(($date > $row['end_date']) && ($date > $row['start_date'])){
                  $status = 'Complete';
                }

                if(($date > $row['start_date']) && ($date <= $row['end_date'])){
                  $status = 'Ongoing';
                }
               
                echo"
                <tr>
                  <td>$i</td>
                  <td>$row[event_name]</td>
                  <td>$row[event_type]</td>
                  <td>$row[location]</td>
                  <td>$row[start_date] to $row[end_date]</td>
                  <td>$row[noOfGuest]</td>
                  <td>$row[plan_type]</td>
                  <td>$status</td>
                  <td><button class=\"go-event\"><a href =\" ".BASEURL ."/customerEventSB/index/$row[planning_id]\">Go</a></button></td>";
                if($status == "Complete"){
                  echo "<td><button class=\"cancel-event\"><a href =\" ".BASEURL ."/customerMyEvent/deleteEvent/$row[planning_id]\">Remove</button></td>";
                }else{
                  echo "
                  <td>  
                    <div class=\"btn-group\">
                        <button class=\"edit-event\"><a href =\" ".BASEURL ."/customerOnYourOwnPlan/editEvent/$row[planning_id]\">Edit</a></button>
                        <button class=\"cancel-event\" onclick=\"document.getElementById('$row[planning_id]').style.display='block'\">Cancel</button>   
                    </div>

                    <div id=\"$row[planning_id]\" class=\"modal\">
                      <span onclick=\"document.getElementById('$row[planning_id]').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
                      <form class=\"modal-content\" action=\"/action_page.php\">
                        <div class=\"container-modal\">
                          <h1>Cancel Event</h1>
                          <br><br><p>Are you sure you want to cancel your event?</p>
                    
                          <div class=\"clearfix\">
                            <button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('$row[planning_id]').style.display='none'\">No</button>
                            <button type=\"button\" class=\"deletebtn\" onclick=\"window.location=' " . BASEURL . "/customerMyEvent/deleteEvent/$row[planning_id]'\">Yes</button>
                          </div>
                        </div>
                      </form>
                    </div>

                  
                  </td>";

                } 
                  
                echo"</tr>";   
                
            $i++;
          }?>
       
      </table>
     
   </div>

   </div>

   <?php linkPhp("footer") ?>
    
    
</body>
</html>