<?php $errors = $data['errors'] ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="spService.css">
    <link rel="stylesheet" href="package.css"> -->
    <?php linkCSS("vendor/spService");  ?>
    <?php linkCSS("vendorNavigation"); ?>
    <?php linkCSS("vendor/spAddPackage"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<header>
    <?php linkPhp("vendorNavigation") ?>
</header>
<div class="container">
  <div class="sidebar">
    
    <ul class="sidenav-links">
      <li>
        <a href="<?php echo BASEURL . '/spAnalytics'; ?>">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
          <span class="links_name">Analytics</span>
        </a>
      </li>
      <li>
        <a href="<?php echo BASEURL . '/spProfile'; ?>">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          <span class="links_name">Profile</span>
        </a>
      </li>
    <li>
      <a href="<?php echo BASEURL . '/spService'; ?>">
        <i class="fa fa-server" aria-hidden="true"></i>
        <span class="links_name">Services</span>
      </a>
    </li>
    <li>
      <a href="<?php echo BASEURL . '/spBooking'; ?>">
        <i class="fa fa-list" aria-hidden="true"></i>
        <span class="links_name">Booking</span>
      </a>
    </li>
    <li>
      <a href="<?php echo BASEURL . '/spMarketing'; ?>">
        <i class="fa fa-sticky-note" aria-hidden="true"></i>
        <span class="links_name">Marketing</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo BASEURL . '/spWallet'; ?>">
        <i class="fa fa-usd" aria-hidden="true"></i>
        <span class="links_name">Wallet</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <span class="links_name">Chat</span>
      </a>
    </li>
    <li>
      <a href="#">
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
        <span class="dashboard">SERVICES</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="name-container">
          <div class="service">
                <button id="s_btn" class="serviceBtn">Our Services</button>    
          </div>
          <div class="package">
            <button id="p_btn" class="packageBtn">Our Packages</button>
          </div>
      </div>
      <div id="service" class="services-box">
        <table class="table-content">
          <thead>
            <tr>
              <th>Service Name</th>
              <th>Service Information</th>
              <th>Current Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Venues & Halls</th>
              <th><a href="<?php echo BASEURL . '/venuesANDhalls'; ?>">Mount Lavinia Hotel</a><br>Colombo, Sri Lanka</th>
              <th>Accepted</th>
              <th><button class="delete-service">Delete</button></th>
            </tr>
            <tr>
              <th>Venues & Halls</th>
              <th><a href="#">Nilwala Caterings</a><br>Galle Rd, Matara</th>
              <th>Pending</th>
              <th><button class="delete-service">Delete</button></th>
            </tr>
            <tr>
              <th>Venues & Halls</th>
              <th><a href="#">Hikka Trans by Cinomon</a><br>Galle Rd, Hikkaduwa</th>
              <th>Pending</th>
              <th><button class="delete-service">Delete</button></th>
            </tr>
            <tr>
              <th>Venues & Halls</th>
              <th><a href="#">Nilwala Caterings</a><br>Galle Rd, Matara</th>
              <th>Pending</th>
              <th><button class="delete-service">Delete</button></th>
            </tr>
          </tbody> 
        </table>
          <div class="add-service">
            <a>Add New Service </a>
            <button class="new-service"><i class='fa fa-plus-circle' ></i></button> 
          </div>
        </div>              
        
        <div id="package" class="packages-box">
          <table class="table-content">
            <thead>
              <tr>
                <th>Package Name</th>
                <th>Service Name</th>
                <th>Package Information</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

            <?php while($row=mysqli_fetch_assoc($data['packages']) ){
              $i = 1;
                // $row2=mysqli_fetch_assoc($data['customer_email']);
              echo"
              <tr>
              <th>$row[package_name]</th>
                <th>$row[service_name]</th>
                <th><a href=#>View Info</a></th>
                <th class=\"btn-row\">
                  <button class=\"edit-package\">Edit</button>
                  <button class=\"delete-package\">Delete</button>
                </th> 
                </tr>
                ";
              $i++;
            }?>


              <!-- <tr>
                <th>Summer package</th>
                <th>Venues & Halls</th>
                <th><a href="<?php echo BASEURL . '/venuesANDhalls'; ?>">View Info</a></th>
                <th class="btn-row">
                  <button class="edit-package">Edit</button>
                  <button class="delete-package">Delete</button>
                </th>
              </tr>
              <tr>
                <th>Big deal</th>
                <th>Venues & Halls</th>
                <th><a href="#">View Info</a></th>
                <th class="btn-row">
                  <button class="edit-package">Edit</button>
                  <button class="delete-package">Delete</button>
                </th>
              </tr>
              <tr>
                <th>Summer Package</th>
                <th>Venues & Halls</th>
                <th><a href="#">View Info</a></th>
                <th class="btn-row">
                  <button class="edit-package">Edit</button>
                  <button class="delete-package">Delete</button>
                </th>
              </tr> -->
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
 
  <?php linkJS("vendor/spService"); ?>
  <?php linkJS("vendor/spAddPackage"); ?>
</body>
</html>