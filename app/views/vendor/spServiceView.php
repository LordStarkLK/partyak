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
        <!-- <div class="name-container">
          <div class="service">
            <button id="s_btn" class="serviceBtn">Our Services</button>
          </div>
          <div class="package">
            <button id="p_btn" class="packageBtn">Our Packages</button>
          </div>
        </div> -->
        <!-- <div id="service" class="services-box">
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
                <th>Caterings</th>
                <th><a href="#">Crystal Caterings</a><br>Galle Rd, Matara</th>
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
                <th>Caterings</th>
                <th><a href="#">Foodie Caterings</a><br>Nugegoda</th>
                <th>Pending</th>
                <th><button class="delete-service">Delete</button></th>
              </tr>
            </tbody>
          </table>
          <div class="add-service">
            <a>Add New Service </a>
            <button id="addservice_button" class="new-service"><i class='fa fa-plus-circle' ></i></button> 
          </div>
        </div> -->

        <div id="package" class="packages-box">
          <div class="ser-name">
            <a href="<?php echo BASEURL . '/venuesANDhalls'; ?>">Mount Lavinia Hotel</a>
          </div>
          <table class="table-content">
            <thead>
              <tr>
                <th>Package Name</th>
                <th>Service Name</th>
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
</div>

<!-- add new service popup -->
<div id="addservicePopup" class="addservice_container">
<!-- The Modal -->
  <div class="form_container">
    <div class="close-button"><span class="service_close">&times;</span></div>
    
    <form id="regForm" action="">

        <h1>Service Registration</h1>
        
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
          <div class="content_title"><a>Service Details:</a></div>
            <div class="row">
              <div class="col_name">
                <label for="sname">Service Name</label>
              </div>
              <div class="col_input">
                <input type="text" id="sname" name="servicename" placeholder="Your service name">
              </div>
            </div>
            <div class="row">
                <div class="col_name">
                  <label for="sdescription">Service Description</label>
                </div>
                <div class="col_input">
                  <textarea id="sdescription" name="servicedescription" placeholder="Description Here (visible for customers)" style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col_name">
                    <label for="sname">Service Type</label>
                </div>
                <div class="col_input">
                    <select id="country" name="country">
                        <option value="cate">Catering</option>
                        <option value="cakes">Cake and sweets</option>
                        <option value="dancing">Dancing groups</option>
                        <option value="deco">Decoration</option>
                        <option value="dresses">Dresses</option>
                        <option value="musical">Musical</option>
                        <option value="photo">Photography</option>
                        <option value="saloon">Saloon</option>
                        <option value="usa">Sounds and lightings</option>
                        <option value="vANDs">Venues and Halls</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col_name">
                    <label for="etype">Event Types</label>
                </div>
                <div class="col_input">
                    <input type="checkbox" id="et1" name="et1" value="wedd">
                    <label for="etype1"> Weddings</label><br>
                    <input type="checkbox" id="et2" name="et2" value="party">
                    <label for="etype2"> Parties/Festivals</label><br>
                    <input type="checkbox" id="et3" name="et3" value="coopE">
                    <label for="etype3"> Cooperate Events</label><br>
                </div>
            </div>
            <div class="row">
                <div class="col_name">
                    <label for="sname">Service Privided Areas</label>
                </div>
                <div class="col_input">
                    <input type="checkbox" id="province1" name="province1" value="wedd">
                    <label for="p1"> Southern Province</label><br>
                    <input type="checkbox" id="province2" name="province2" value="wedd">
                    <label for="p2"> Western Province</label><br>
                    <input type="checkbox" id="province3" name="province3" value="wedd">
                    <label for="p3"> Sabaragamuwa Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd">
                    <label for="p1"> Uva Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd">
                    <label for="p1"> Central Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd">
                    <label for="p1"> Eastern Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd">
                    <label for="p1"> North western Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd">
                    <label for="p1"> North Central Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd">
                    <label for="p1"> Nouthern Province</label><br>
                </div>
            </div>
            <div class="row">
                <div class="col_name">
                    <label for="sname">Social URL</label>
                </div>
                <div class="col_input">
                    <div class="url_name">Facebook</div>
                    <input type="url" id="furl" name="furl" placeholder="Facebook url here">
                    <div class="url_name">Instagram</div>
                    <input type="url" id="iurl" name="iurl" placeholder="Instagram url here">
                    <div class="url_name">LinkedIn</div>
                    <input type="url" id="lurl" name="lurl" placeholder="LinkedIn url here">
                </div>
            </div>
          <!-- <p><input placeholder="First name..." oninput="this.className = ''"></p>
          <p><input placeholder="Last name..." oninput="this.className = ''"></p> -->
        </div>
        
        <div class="tab">
          <div class="content_title"><a>Booking Setting Details:</a></div>

          <div class="row">
            <div class="col_name">
                <label for="rprice">Reservation Price(LKR)</label>
            </div>
            <div class="col_input">
                <input type="text" id="rprice" name="reservationprice" placeholder >
            </div>
          </div>
          <div class="row">
            <div class="col_name">
                <label for="intialDis">Initial Discount</label>
            </div>
            <div class="col_input">
                <input type="number" id="intialDis" name="initialDiscount" placeholder min="0">
                <a> % discount for first </a>
                <input type="number" id="intialDis" name="initialDiscount" placeholder min="0">
                <a> bookings</a>
            </div>
          </div>
          <div class="row">
            <div class="col_name">
                <label for="pretime">Preparation Time</label>
            </div>
            <div class="col_input">
                <input type="text" id="pretime" name="preparationtime" placeholder>
            </div>
          </div>
          <div class="row">
            <div class="col_name">
              <label for="simultaneous">Simultaneous Booking</label>
            </div>
            <div class="col_input">
              <input type="text" id="simultaneous" name="simultaneous_booking" placeholder="Your service name">
            </div>
          </div>
          <div class="row">
            <div class="col_name">
              <label for="policy">Cancellation Policy</label>
            </div>
            <div class="col_input">
                <select id="policy" name="policy">
                  <option value="cate">3 days before reserve date</option>
                  <option value="cakes">1 week before reserve date</option>
                  <option value="dancing">2 weeks before reserve date</option>    
                </select>
            </div>
          </div>
        <div class="row">
          <div class="col_name">
            <label for="tANDc">Payment Terms and Conditions</label>
          </div>
          <div class="col_input">
            <textarea id="tANDc" name="payment_tANDc" placeholder="Payment T&C" style="height:100px"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col_name">
            <label for="info">Additional Information</label>
          </div>
          <div class="col_input">
            <textarea id="info" name="additionalInfo" placeholder="Additional information about booking" style="height:100px"></textarea>
          </div>
        </div>

        </div>
        
        <div class="tab">
          <div class="content_title"><a>Select Available Features:</a></div>

          <div class="features">

            <div class="venues">
              <div class="row">
                <div class="col_name">
                  <label for="vtype">Venue Type</label>
                </div>
                <div class="col_input">
                  <input type="radio" id="vt1" name="vt1" value="indoor">
                  <label for="vtype1"> Indoor</label><br>
                  <input type="radio" id="vt2" name="vt2" value="outdoor">
                  <label for="vtype2"> Outdoor</label><br>
                   <input type="radio" id="vt3" name="vt3" value="both">
                  <label for="vtype3"> Both</label><br>
                </div>
              </div>
              <div class="row">
                <div class="col_name">
                    <label for="capacity">Standing Capacity</label>
                </div>
                <div class="col_input">
                    <input type="text" id="capacity" name="standingcapacity" placeholder min="100">
                </div>
              </div>
              <div class="row">
                <div class="col_name">
                  <label for="seating">Seating Arrangment</label>
                </div>
                <div class="col_input">
                  <input type="checkbox" id="sa1" name="sa1" value="banquet">
                  <label for="sa1"> Banquet</label><br>
                  <input type="checkbox" id="sa2" name="sa2" value="board">
                  <label for="sa2"> Board</label><br>
                  <input type="checkbox" id="sa3" name="sa3" value="classroom">
                  <label for="sa3"> Classroom</label><br>
                  <input type="checkbox" id="sa4" name="sa4" value="informal">
                  <label for="sa4"> Informal</label><br>
                  <input type="checkbox" id="sa5" name="sa5" value="oval">
                  <label for="sa5"> Oval</label><br>
                  <input type="checkbox" id="sa6" name="sa6" value="ushape">
                  <label for="sa6"> U shape</label><br>
                </div>
              </div>
              <div class="row">
                <div class="col_name">
                  <label for="sname">Additional Features</label>
                </div>
                <div class="col_input">
                  <input type="checkbox" id="af1" name="af1" value="wifi">
                  <label for="feature1"> Wi fi</label><br>
                  <input type="checkbox" id="af2" name="af2" value="parking">
                  <label for="feature2"> Car Parking</label><br>
                  <input type="checkbox" id="af3" name="af3" value="reception">
                  <label for="feature3"> Reception area</label><br>
                  <input type="checkbox" id="af4" name="af4" value="setiback">
                  <label for="feature4"> Seti back</label><br>
                  <input type="checkbox" id="af5" name="af5" value="garden">
                  <label for="feature5"> Garden</label><br>
                  <input type="checkbox" id="af6" name="af6" value="smokingarea">
                  <label for="feature6"> Smoking area</label><br>
                  <input type="checkbox" id="af7" name="af7" value="dancingfloor">
                  <label for="feature7"> Dancing floor</label><br>
                  <input type="checkbox" id="af8" name="af8" value="poruwa">
                  <label for="feature8"> Poruwa</label><br>
                </div>
              </div>
            </div>

            



          </div>
        </div>
        
        <div class="tab">
          <div class="content_title"><a>Image and caption:</a></div>

          <div class="row">
            <div class="col_name">
              <label for="caption">Caption</label>
            </div>
            <div class="col_input">
              <input type="text" id="caption" name="caption" placeholder="Add your service caption">
            </div>
          </div>
          <div class="row">
            <div class="col_name">
              <label for="simage">Image</label>
            </div>
            <div class="col_input">
              <input type="file" id="simage" name="serviceimage"><br><br>
            </div>
          </div>
          <div class="row">
            <div class="col_name">
              <label for="sdoc">Document</label>
            </div>
            <div class="col_input">
              <input type="file" id="sdoc" name="servicedoc"><br><br>
            </div>
          </div>
        </div>
        
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        
        <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
        
    </form>
  </div>
</div>

</div>
 
  <?php linkJS("vendor/spService"); ?>
  <?php linkJS("vendor/spAddPackage"); ?>
  <?php linkJS("vendor/addService"); ?>
  <?php linkPhp("footer") ?>
</body>

</html>