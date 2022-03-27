<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("eventPlanner/epProfile"); ?>
  <?php linkCSS("navigation"); ?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $name = $data['profile']; ?>
  <?php $email = $data['cus_email']; ?>
  <?php $profi = $data['profileimage']; ?>
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
          <span class="dashboard">PROFILE</span>
        </div>
      </nav>

      <div class="home-content" id="original">
        <div class="profile_pic">
          <div class="image">
            <img src="<?php echo BASEURL; ?>/public/img/userImages/<?php
                                                                    if ($profi['profilePicture']) {
                                                                      echo $profi['profilePicture'];
                                                                    } else {
                                                                      echo "pp_default.png";
                                                                    } ?>">
            <!-- <img <?php echo "$profi[profilePicture]"; ?>> -->
            <!-- <img <?php srcIMG("avatar.png") ?> alt="Avatar"> -->
            <!-- <img src="/public/img/avatar.png" alt="Avatar"> -->
          </div>
        </div>
        <div class="profile_details">
          <div class="edit" id="editt"><a href="#">Edit</a></div>
          <div class="personal_info">
            <a>Personal Information</a><br><br>
            <div class="row">
              <div class="col_name">
                <label for="fname">Name</label>
              </div>
              <div class="col_data">
                <p><?php echo "$name[f_name]"; ?> </p>
              </div>
            </div>

            <div class="row">
              <div class="col_name">
                <label for="lname">Last Name</label>
              </div>
              <div class="col_data">
                <p><?php echo "$name[l_name]"; ?></p>
              </div>
            </div>

            <div class="row">
              <div class="col_name">
                <label for="email">Email</label>
              </div>
              <div class="col_data">
                <p><?php echo "$email[email]"; ?></p>
              </div>
            </div>

            <div class="row">
              <div class="col_name">
                <label for="nic">NIC number</label>
              </div>
              <div class="col_data">
                <p><?php echo "$name[nic]"; ?></p>
              </div>
            </div>

            <div class="row">
              <div class="col_name">
                <label for="gender">Gender</label>
              </div>
              <div class="col_data">
                <p><?php echo "$name[gender]"; ?></p>
              </div>
            </div>

            <div class="row">
              <div class="col_name">
                <label for="address">Address</label>
              </div>
              <div class="col_data">
                <p><?php echo "$name[address]"; ?></p>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="ehome-content" id="edit">
        <form action="<?php echo BASEURL . '/epProfile/handleThePicture'; ?>" class="eprofile_pic" method="post" enctype="multipart/form-data">
          <div class="eimage">
            <input type="file" name='imageUpload' id="imageUpload" class="filedd">
            <!-- <button type="file" class="savebb"><a href="#"><i class="fas fa-camera" ></i>Edit</a></button> -->

            <img src="<?php echo BASEURL; ?>/public/img/userImages/<?php if ($profi['profilePicture']) {
                                                                      echo $profi['profilePicture'];
                                                                    }  ?>">
            <!-- <div class="cam" id="cami">
                        <button type="button" class="savebb"><a href="#"><i class="fas fa-camera" ></i>Edit</a></button>
                    </div> -->


          </div>
          <input type="submit" class="savebtn" value="Upload the Image" name="saveButton">
        </form>


        <div class="eprofile_details">
          <form action="<?php echo BASEURL . '/epProfile/index'; ?>" class="epersonal_info" method="POST">
            <a>Edit Personal Information</a><br><br>

            <div class="erow">
              <div class="ecol_name">
                <label for="fname">First Name</label>
              </div>
              <div class="ecol_data">
                <input id="fname" name="f_name" value="<?php echo "$name[f_name]"; ?>">
              </div>
            </div>

            <div class="erow">
              <div class="ecol_name">
                <label for="lname">Last Name</label>
              </div>
              <div class="ecol_data">
                <input id="lname" name="l_name" value="<?php echo "$name[l_name]"; ?>">
              </div>
            </div>

            <div class="erow">
              <div class="ecol_name">
                <label for="email">Email</label>
              </div>
              <div class="ecol_data">
                <input id="email" name="email" value="<?php echo "$email[email]"; ?>">
              </div>
            </div>

            <div class="erow">
              <div class="ecol_name">
                <label for="nic">NIC number</label>
              </div>
              <div class="ecol_data">
                <input id="nic" name="nic" value="<?php echo "$name[nic]"; ?>">
              </div>
            </div>

            <div class="erow">
              <div class="ecol_name">
                <label for="egender">Gender</label>
              </div>
              <div class="ecol_data">
                <input id="gender" name="gender" value="<?php echo "$name[gender]"; ?>">
              </div>
            </div>

            <div class="erow">
              <div class="ecol_name">
                <label for="eaddress">Address</label>
              </div>
              <div class="ecol_data">
                <input id="address" name="address" value="<?php echo "$name[address]"; ?>">

              </div>
            </div>

            <div class="save">
              <button type="submit" class="saveb" value="Submit">Save</button>
            </div>

          </form>
        </div>


      </div>
    </section>
  </div>

  <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

  <?php linkJS("customer/customerProfile"); ?>
  <?php linkJS("vendor/spProfile"); ?>
</body>

</html>