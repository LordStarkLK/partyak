<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("eventPlanner/epService"); ?>
  <?php linkCSS("navigation"); ?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <?php linkPhp("vendorNavigation") ?>
  </header>
  <div class="container">
    <?php linkPhp("epSideBar") ?>

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">SERVICES</span>
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

        <div id="service" class="services-box">
          <table class="table-content">
            <thead>
              <tr>
                <th>Service Name</th>
                <th>Location</th>
                <th>Current Status</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <!-- <th>Venues & Halls</th> -->
                <th><a href="#">Nekatha Wedding Planners</a></th>
                <th>Galle Rd, Hikkaduwa</th>
                <th>Accepted</th>

              </tr>
              <!-- <tr>
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
              </tr> -->
            </tbody>
          </table>
          <div class="add-service">
            <a>Update Service </a>
            <button class="new-service"><i class="fa fa-plus" aria-hidden="true"></i></button>
          </div>
        </div>

        <!-- <div id="package" class="packages-box">
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
              <tr>
                <th>Summer Package</th>
                <th>Venues & Halls</th>
                <th><a href="#">View Info</a></th>
                <th class="btn-row">
                  <button class="edit-package">Edit</button>
                  <button class="delete-package">Delete</button>
                </th>
              </tr>
              <tr>
                <th>Buffet Package</th>
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
              </tr>
            </tbody>
          </table>
          <div class="add-package">
            <a>Add New Package </a>
            <button class="new-package"><i class="fa fa-plus" aria-hidden="true"></i></button>
          </div>
        </div> -->
      </div>
    </section>
  </div>

  <!-- <?php linkJS("vendor/spService"); ?> -->

</body>

</html>