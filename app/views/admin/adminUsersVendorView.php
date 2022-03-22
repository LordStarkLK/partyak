<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminUsers"); ?>
    <?php linkCSS("css/all"); ?>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    
</head>

<body>
    <div class="container">
        <?php linkPHP("adminSidebar");?>
        <section class="home-section">

            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
                <span class="dashboard">USERS</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-customer">
                        <span class="links_name" onclick="window.location='<?php echo BASEURL . '/adminUsers'; ?>'"><img
                                class="customer-image" <?php srcIMG("consumer.png") ?> width="40" height="40">
                            <div class="box-topic">Customers</div>
                        </span>
                        <!-- <a href="<?php echo BASEURL . 'adminUsers'; ?>"></a>
            <img class="customer-image" <?php srcIMG("consumer.png") ?> width="40" height="40">
            <div class="box-topic">Customers</div> -->


                        <!-- <i class='bx bxs-user cart'></i> -->
                    </div>
                    <div class="box" id="box-service">
                        <span class="links_name">
                            <img class="service-image" <?php srcIMG("service.png") ?> width="40" height="40">
                            <div class="box-topic">Vendors</div>
                        </span>


                        <!-- <i clss='bx bxs-user-rectangle cart two' ></i> -->
                    </div>
                    <!-- <div class="box" id="box-event">
        <span class="links_name" onclick="window.location='<?php echo BASEURL . '/adminUsersEvent'; ?>'">
        <img class="event-image" <?php srcIMG("event.png") ?> width="40" height="40">   
            <div class="box-topic">Event Planners</div>
    </span>
            
          
          
        </div> -->
                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Vendors</a></li>
                    </ul>

                    <div class="search">
                        <span class="text"> View users...</span>
                        <input type="text" name="search" placeholder="Enter name to search...">
                        <button><i class="fas fa-search"></i></button>
                    </div>


                    </form>
                </div>


            </div>



            <ul class="breadcrumb">

            </ul>

            <div class="sales-boxes">

                <table>
                    <tr>
                        <th>User ID</th>
                        <th>Vendor Name</th>
                        <th>Email</th>
                        <th>Services</th>
                        <th>More Actions</th>

                    </tr>
                    <!-- <tr>
    <td>01</td>
    <td>Griffin</td>
    <td>griffin@gmail.com</td>
    <td>griffin@gmail.com</td>
    <td>
      <div class="btn-group">
        <button>View Profile</button>
        <button>Delete User</button>
        
      </div>
    </td>
  </tr> -->

                    <?php while($row=mysqli_fetch_assoc($data['vendor'])){
  $i = 1;
  // $row2 = mysqli_fetch_assoc($data['service_email']);
  echo"
  <tr>
  <td>$row[user_id]</td>
  <td>$row[f_name] $row[l_name]</td>
  <td>$row[email]</td>
  <td>Not Defined</td>
  <td>
  <div class=\"btn-group\">
  <button onclick=\"window.location=' " . BASEURL . "/adminUserProfile/index/$row[user_id]'\">View Profile</button>

  <button onclick=\"window.location=' " . BASEURL . "/adminUsersVendor/deleteUser/$row[user_id]'\">Delete User</button>
  
</div>

  </td>
  </tr>
  ";
  $i++;
} ?>

                </table>



        </section>
    </div>
    <?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>

    <?php linkJS("adminHomeView"); ?>
    <?php linkJS("admin/userVendor"); ?>




</body>

</html>