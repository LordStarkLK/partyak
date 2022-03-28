<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Contact Event planner</title>
    <?php linkCSS("customer/customerContactEventPlannerView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <?php $serviceI=$data['ep_detail'];?>   
    <?php $planning_id = $data['planning_id']; ?>
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="Customer.browse.SearchVendor.css"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<header>
    <?php linkPhp("customerNavigation") ?>

</header>
<div class="container">
  <p> Event Planners </p>
</div>

    <div class="ecusDetail">
      <div class="ecusraw1">
        <table>
            <?php
                    $i=1;

                        echo"<tr>";
                        $j=1;
                              
                                while($row=mysqli_fetch_assoc($data['ep_detail'])  ){
                                  if($row['status']== "accepted"){
                                    
                                      echo "<td>";
                                      if($row['image']){
                                        echo "<a href=\" ".BASEURL ."/epOnlyService/index/$row[service_id]/$data[planning_id]\"> <img src='http://localhost/partyak/public/img/serviceImages/$row[service_image]'/> </a>";
                                      }else{
                                        $row['image']="default.png";
                                        echo "<a href=\" ".BASEURL ."/epOnlyService/index/$row[service_id]/$data[planning_id]\"><img src='http://localhost/partyak/public/img/serviceImages/$row[service_image]'/> </a>";
                                      }
                                      echo " <br><p>$row[service_name]<br>$row[service_location], Sri Lanka</p>";
                                      echo "</td>"; 
                                     
                                      $j++;
                                      if($j>3){
                                        echo "</tr>";
                                        $j = 1;
                                      }

                                  }
                                  
                                  
                                }
            ?>

        </table>
      </div>
  
    </div>

    
      


<!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

<?php linkJS("customer/customerSearchVendor"); ?>

<?php linkPhp("footer") ?>
</body>

</html>