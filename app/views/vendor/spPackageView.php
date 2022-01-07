<?php $errors = $data['errors'] ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" href="spService.css">
    <link rel="stylesheet" href="package.css"> -->
    <?php linkCSS("vendor/spService");  ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("vendor/spAddPackage"); ?>
   
    <?php linkCSS("footer");?>
    <?php linkCSS("vendor/addService"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <header>
    <?php linkPhp("navigation") ?>
  </header>
  <div class="container">
    <div class="sidebar">

      <ul class="sidenav-links">
        <!-- <li>
          <a href="<?php echo BASEURL . '/spAnalytics'; ?>">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <span class="links_name">Analytics</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="<?php echo BASEURL . '/spProfile'; ?>">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <span class="links_name">Profile</span>
          </a>
        </li> -->
        <li>
          <a href="<?php echo BASEURL . '/spService'; ?>">
            <i class="fa fa-server" aria-hidden="true"></i>
            <span class="links_name">Packages</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spBooking'; ?>">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="links_name">Bookings</span>
          </a>
        </li>
        <!-- <li>
          <a href="<?php echo BASEURL . '/spMarketing'; ?>">
            <i class="fa fa-sticky-note" aria-hidden="true"></i>
            <span class="links_name">Marketing</span>
          </a>
        </li> -->

        <!-- <li>
          <a href="<?php echo BASEURL . '/spWallet'; ?>">
            <i class="fa fa-usd" aria-hidden="true"></i>
            <span class="links_name">Wallet</span>
          </a>
        </li> -->
        <li>
        <a href="<?php echo BASEURL . '/spChat'; ?>">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="links_name">Chat</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spCalendar'; ?>">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="links_name">Calendar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spReview '; ?>">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span class="links_name">Review</span>
          </a>
        </li>
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
          
            

              <?php while ($row = mysqli_fetch_assoc($data['packages'])) {
                $i = 1;
                // $row2=mysqli_fetch_assoc($data['customer_email']);
                echo "
                <div class=\"ser-name\">
            <a href=\" ".BASEURL ."/spService/index/$row[service_id]\">$row[service_name]</a>
          </div>
          <table class=\"table-content\">
                <thead>
              <tr>
                <th>Package Name</th>
                <th>Service Name</th>
                <th>Package Validation</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <th>$row[package_name]</th>
                <th>$row[service_name]</th>
                <th>
                Valid from: $row[valid_from] 
                <br>Valid to: $row[valid_to] 
                <br>
                </th>
                <th class=\"btn-row\">
                  <button class=\"edit-package\">Edit</button>
                  <button class=\"delete-package\">Delete</button>
                </th> 
                </tr>
                ";
                $i++;
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
    <!-- The Modal -->
    <div id="packagePopup" class="addPackage_container">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <form action="<?php echo BASEURL . '/spService/index'; ?>" class="form-area" method="POST">
          <div class="package-details">
            <h2>ADD SERVICE PACKAGE</h2>
            <div class="p_row">
              <div class="p_colName">
                <label>Service Name</label>
              </div>
              <div class="p_colData">
                <input type="text" id="s_name" name="serviceName" placeholder>
                <div class="error"><?php echo $errors["serviceName"] ?></div>
              </div>
            </div>
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
                <input type="text" id="p_fixedprice" name="packageFixedprice" placeholder>
                <!-- <div class="error"><?php echo $errors["packageFixedprice"] ?></div> -->
              </div>
            </div>
            <div class="p_row">
              <div class="p_colName">
                <label>Per unit price</label>
              </div>
              <div class="p_colData">
                <input type="text" id="p_unitprice" name="packageUnitprice" placeholder>
                <!-- <div class="error"><?php echo $errors["packageUnitprice"] ?></div> -->
              </div>
            </div>
            <div class="package-submit-btn">
              <button id="request-submit" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
 
  <?php linkJS("vendor/spService"); ?>
  <?php linkJS("vendor/spAddPackage"); ?>
  <?php linkJS("vendor/addService"); ?>
  <?php linkPhp("footer") ?>
</body>

</html>