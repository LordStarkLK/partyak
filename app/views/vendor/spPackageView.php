<?php $errors = $data['errors'] ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" href="spService.css">
    <link rel="stylesheet" href="package.css"> -->
    <?php linkCSS("vendor/spService");  ?>
    <?php linkCSS("vendor/spDeleteService");  ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("vendor/spAddPackage"); ?>
   
    <?php linkCSS("footer");?>
    <?php linkCSS("vendor/addService"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php $service_id = $data['service_id'];?>
     <!-- <?php $package = $data['packages'];?> -->
   </head>
<body>
  <header>
    <?php linkPhp("navigation") ?>
  </header>
  <div class="container">
    <div class="sidebar">
        <ul class="sidenav-links">
          
          <li>
            <a href="<?php echo BASEURL . '/spPackage/index/'.$service_id.''?>">
              <i class="fa fa-server" aria-hidden="true"></i>
              <span class="links_name">
              <?php if($data['userType']['service_type']=="eventPlanner"){ ?>
              Service<?php }else{ ?>
                Packages
             <?php } ?>
            
            </span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/spBooking/index/'.$service_id.''; ?>">
              <i class="fa fa-list" aria-hidden="true"></i>
              <span class="links_name">Bookings</span>
            </a>
          </li>
          
          <li>
          <a href="<?php echo BASEURL . '/spChat/index/'.$service_id.''; ?>">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span class="links_name">Chat</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/spCalendar/index/'.$service_id.''; ?>">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              <span class="links_name">Calendar</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/spReview/index/'.$service_id.''; ?>">
              <i class="fa fa-star" aria-hidden="true"></i>
              <span class="links_name">Review</span>
            </a>
          </li>
          <?php if($data['userType']['service_type']=="eventPlanner"){ ?>
          <div class="epOnlySidebar">
            <li>
              <a href="<?php echo BASEURL . '/epNoteNew/index/'.$service_id.''; ?>">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <span class="links_name">Note</span>
              </a>
            </li>
            <li>
              <a href="<?php echo BASEURL . '/epNewMyEvent/index/'.$service_id.''; ?>">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <span class="links_name">My Event</span>
              </a>
            </li>
          </div> <?php } ?>
        </ul>
    </div>

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">PACKAGES</span>
        </div>
      </nav>
      <div class="home-content">
        <div id="package" class="packages-box">
          <div class="service-name">
            <!-- <a href=\" ".BASEURL ."/spService/index/$row[service_id]\"> -->
              <?php while ($row = mysqli_fetch_assoc($data['serName'])) {
                
                $i = 1;
                    //add service name of the packages
                echo "<a href=\" ".BASEURL ."/spService/index/$row[service_id]\">  $row[service_name]";
                    
              } ?></a>
          </div>
          <table class="table-content">
            <thead>
              <tr>
                <th>Package Name</th>
                <th>Package Price</th>
                <th>Package Validation</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_assoc($data['packages'])) {
                $i = 1;
                    // $row2=mysqli_fetch_assoc($data['customer_email']);
                echo "
                    <tr>
                        <th>$row[package_name]</th>
                ";

                if($row['per_unit_price'] != 0){
                  echo " <th>Per Unit Price <br> $row[per_unit_price]</th> ";
                }
                elseif($row['fixed_price'] != 0){
                  echo " <th>Fixed Price <br> $row[fixed_price]</th> ";
                }

                echo "
                        <th>Valid from: $row[valid_from] <br> Valid to: $row[valid_to] <br></th>
                        <th class=\"btn-row\">
                          <button class=\"edit-package\" onclick=\"funcpassid($row[package_id])\" id=\"$row[package_id]-btn\">Edit</button>
                          <button class=\"delete-package\" onclick=\"document.getElementById('$row[package_id]').style.display='block'\">Delete</button>
                        </th> 
                    </tr>
                ";
                    
              } ?>

            </tbody>
          </table>

          <div class="add-package">
            <a>Add New Package </a>
            <button id="request-button" class="new-package"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
          </div> 
        </div>
      </div>
    </section>

    <?php mysqli_data_seek($data['packages'], 0); while($row=mysqli_fetch_assoc($data['packages'])){ 
      echo"
        <div id=\"$row[package_id]\" class=\"delContainer\">
                        
          <div class=\"delContent\">
            <div class=\"container-top\">
                        
              <div class=\"del-icon\"><i class=\"fa fa-trash fa-3x\" aria-hidden=\"true\"></i></div>
                           
            </div>
            <div class=\"container-bottom\">
              <div class=\"title\"><a>You are about to delete a Package!</a></div>
              <div class=\"ser-name\"><a>$row[package_name]</a></div>
              <div class=\"description\"><a>All the related details to the package will be deleted.</a><br><a>Are you sure?</a></div>
                <div class=\"action\">
                  <button class=\"action-btn delete\" onclick=\"window.location=' " . BASEURL . "/spPackage/deletePackage/$row[package_id]/$row[service_id]'\">Confirm</button>
                 <button class=\"action-btn cancel\" onclick=\"document.getElementById('$row[package_id]').style.display='none'\">Cancel</button>
                </div>
              </div>
            </div>
             
            </div>
        ";
      } ?>


<!-- The Modal for adding new package -->
<div id="packagePopup" class="addPackage_container">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <form action="<?php echo BASEURL . '/spPackage/index/'.$service_id.''; ?>" method="POST">
    <div class="package-details">
      <h2>ADD SERVICE PACKAGE</h2>
      <div class="p_row">
        <div class="p_colName">
          <label>Package Name</label>
        </div>
        <div class="p_colData">
          <input type="text" id="p_name" name="packageName" placeholder>
          <div class="error"><?php echo $errors["packageName"] ?></div>
        </div>
      </div>
      <div class="p_row">
        <div class="p_colName">
          <label>Package Description</label>
        </div>
        <div class="p_colData">
          <textarea type="text" id="p_description" name="packageDescription" placeholder></textarea>
          <div class="error"><?php echo $errors["packageDescription"] ?></div>
        </div>
      </div>
      <div class="p_row">
        <div class="p_colName">
          <label>Validation Period</label>
        </div>
        <div class="p_colData">
          <label>From</label>
          <input type="date" id="p_valid" name="packageValidFrom" placeholder>
          <div class="error"><?php echo $errors["packageValidFrom"] ?></div>
          <label>To</label>
          <input type="date" id="p_valid" name="packageValidTo" placeholder>
          <div class="error"><?php echo $errors["packageValidTo"] ?></div>
        </div>
      </div>

      <a>*Fill one of the suitable pricing method</a>
      <div class="p_row">
        <div class="p_colName">
          <label>Fixed Price</label>
        </div>
        <div class="p_colData">
          <input type="text" id="p_fixedprice" name="packageFixedprice" value="0" placeholder>
          <!-- <div class="error"><?php echo $errors["packageFixedprice"] ?></div> -->
        </div>
      </div>
      <div class="p_row">
        <div class="p_colName">
          <label>Per unit price</label>
        </div>
        <div class="p_colData">
          <input type="text" id="p_unitprice" name="packageUnitprice" value="0" placeholder>
          <!-- <div class="error"><?php echo $errors["packageUnitprice"] ?></div> -->
        </div>
      </div>
      <input type = "hidden" name = "package_id" value = "insert" />
      <div class="package-submit-btn">
        <button id="request-submit" type="submit">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>  




<?php mysqli_data_seek($data['packages'], 0); while($row3=mysqli_fetch_assoc($data['packages'])){

echo "
<!-- The Modal for editing package -->
<div id=\"$row3[package_id]-modal\" class=\"addPackage_container\">

<!-- Modal content -->
<div class=\"modal-content\">
  <span class=\"close\">&times;</span>
  <form action=\"".BASEURL."/spPackage/index/$row3[service_id]\" method=\"POST\">
    <div class=\"package-details\">
      <h2>EDIT SERVICE PACKAGE</h2>
      
      <div class=\"p_row\">
        <div class=\"p_colName\">
          <label>Package Name</label>
        </div>
        <div class=\"p_colData\">
          <input type=\"text\" id=\"p_name\" name=\"packageName\" value=\"$row3[package_name]\" placeholder>
          <div class=\"error\"><?php echo $errors[packageName] ?></div>
        </div>
      </div>
      <div class=\"p_row\">
        <div class=\"p_colName\">
          <label>Package Description</label>
        </div>
        <div class=\"p_colData\">
          <textarea type=\"text\" id=\"p_description\" name=\"packageDescription\" placeholder>$row3[description]</textarea>
          <div class=\"error\"><?php echo $errors[packageDescription] ?></div>
        </div>
      </div>
      <div class=\"p_row\">
        <div class=\"p_colName\">
          <label>Validation Period</label>
        </div>
        <div class=\"p_colData\">
          <label>From</label>
          <input type=\"date\" id=\"p_valid\" name=\"packageValidFrom\" value=\"$row3[valid_from]\" placeholder>
          <div class=\"error\"><?php echo $errors[packageValidFrom] ?></div>
          <label>To</label>
          <input type=\"date\" id=\"p_valid\" name=\"packageValidTo\" value=\"$row3[valid_to]\" placeholder>
          <div class=\"error\"><?php echo $errors[packageValidTo] ?></div>
        </div>
      </div>

      <a>*Fill one of the suitable pricing method</a>
      <div class=\"p_row\">
        <div class=\"p_colName\">
          <label>Fixed Price</label>
        </div>
        <div class=\"p_colData\">
          <input type=\"text\" id=\"p_fixedprice\" name=\"packageFixedprice\" value=\"$row3[fixed_price]\" placeholder>
        </div>
      </div>
      <div class=\"p_row\">
        <div class=\"p_colName\">
          <label>Per unit price</label>
        </div>
        <div class=\"p_colData\">
          <input type=\"text\" id=\"p_unitprice\" name=\"packageUnitprice\" value=\"$row3[per_unit_price]\" placeholder>
        </div>
      </div>
      <input type = \"hidden\" name = \"package_id\" value = \"$row3[package_id]\" />
      <div class=\"package-submit-btn\">
        <button id=\"request-submit\" type=\"submit\">Submit</button>
      </div>
    </div>
  </form>
</div>
</div> 
";}

?>





  </div>
</div>

</div>
 
<?php linkJS("vendor/spService"); ?>
  <?php linkJS("vendor/spAddPackage"); ?>
 
  <?php linkPhp("footer") ?>
</body>

</html>