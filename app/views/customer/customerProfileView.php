<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <?php linkCSS("customer/customerProfileView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("footer");?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $name=$data['profile'];?>
    <?php $email=$data['cus_email'];?>
    <?php $profi=$data['profileimage'];?>
   </head>
<body>
<header>
    <?php
            if (!isset($_SESSION["type"])) {
                linkPhp("Navigation");
            } else {
                if ($_SESSION["type"] == "customer") {
                    linkPhp("customerNavigation");
                } else {
                    linkPhp("Navigation");
                }
            }

    ?>
</header>
<div class="container">
<div class="sidebar">
    
<ul class="sidenav-links">
          <li>
            <a href="#">
                <i class="fas fa-user-tie" ></i>
              <span class="links_name">Personal Info</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/customerProfileBooking'; ?>">
              <i class="fas fa-book" ></i>
              <span class="links_name">Booking Details</span>
            </a>
          </li>
        <!-- <li>
          <a href="<?php echo BASEURL . '/customerProfilePaymentD'; ?>">
            <i class="fas fa-money-check-alt" ></i>
            <span class="links_name">Payment Details</span>
          </a>
        </li> -->
        <li>
          <a href="<?php echo BASEURL . '/customerChat'; ?>">
            <i class="fas fa-comments" ></i>
            <span class="links_name">Chat</span>
          </a>
        </li>
        
        <!-- <li>
          <a href="#">
            <i class="fas fa-bell" ></i>
            <span class="links_name">Notification</span>
          </a>
        </li> -->
        <li>

          <a href="<?php echo BASEURL . '/customerProfile/resetPassword'; ?>">
            <i class="fas fa-unlock" ></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>
       
      </ul>
</div>
  
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
                <img src="<?php echo BASEURL; ?>/public/img/userImages/<?php if ($profi['profilePicture']) {
                    echo $profi['profilePicture'];
                    } 
                    else {
                        echo "pp_default.png";
                    } ?>" >
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
        <div class="upload">

            <button type="file" name="file" class="filec" onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>

            <form action="<?php echo BASEURL . '/customerProfile/handleThePicture'; ?>"  class="eprofile_pic" method="post" enctype="multipart/form-data" > 
                <div class="eimage">
    
                        <img id="contentImg" src="<?php echo BASEURL; ?>/public/img/userImages/<?php if ($profi['profilePicture']) {
                        echo $profi['profilePicture'];
                        }  ?>" >
        
                </div>
                    <input type="file" name='imageUpload' id="default-btn" class="filedd" hidden>
                    <button type="submit" class="savebtn" value="Upload the Image" name="saveButton">Upload</button>
            </form>

        </div>
 

        <div class="eprofile_details">
            <form action="<?php echo BASEURL . '/customerProfile/index'; ?>" class="epersonal_info" method="POST">
                <a>Edit Personal Information</a><br><br>
                 
                <div class="erow">
                    <div class="ecol_name">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="ecol_data">
                        <input id="fname" name="f_name" value="<?php echo "$name[f_name]"; ?>" >
                    </div>
                </div>

                <div class="erow">
                    <div class="ecol_name">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="ecol_data">
                        <input id="lname" name="l_name" value="<?php echo "$name[l_name]"; ?>" > 
                    </div>
                </div>

                <div class="erow">
                    <div class="ecol_name">
                        <label for="email">Email</label>
                    </div>
                    <div class="ecol_data">
                        <input id="email" name="email" value="<?php echo "$email[email]"; ?>" > 
                    </div>
                </div>

                <div class="erow">
                    <div class="ecol_name">
                        <label for="nic">NIC number</label>
                    </div>
                    <div class="ecol_data">
                        <input id="nic" name="nic" value="<?php echo "$name[nic]"; ?>" > 
                    </div>
                </div>

                <div class="erow">
                    <div class="ecol_name">
                        <label for="egender">Gender</label>
                    </div>
                    <div class="ecol_data">
                        <input id="gender" name="gender" value="<?php echo "$name[gender]"; ?>" > 
                    </div>
                </div>

                <div class="erow">
                    <div class="ecol_name">
                        <label for="eaddress">Address</label>
                    </div>
                    <div class="ecol_data">
                        <input id="address" name="address" value="<?php echo "$name[address]"; ?>" > 
                       
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
<?php linkJS("vendor/spProfile"); ?>
<?php linkJS("customer/customerProfile"); ?> 
<?php linkPhp("footer") ?>


<script>
    const wrapper = document.querySelector(".wrapper");
    const fileName = document.querySelector(".file-name");
    const defaultBtn = document.querySelector("#default-btn");
    const customBtn = document.querySelector("#custom-btn");
    const cancelBtn = document.querySelector("#cancel-btn i");
    // const img = document.querySelector("img");
    const img = document.getElementById("contentImg")
    let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    function defaultBtnActive(){
        defaultBtn.click();
    }

    defaultBtn.addEventListener("change", function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.onload = function(){
                const result = reader.result;
                img.src = result;
                wrapper.classList.add("active");
            }
            cancelBtn.addEventListener("click", function(){
                img.src = "";
                wrapper.classList.remove("active");
            })
            //read the content of the file
            reader.readAsDataURL(file);
        }

        if(this.value){
            let valueStore = this.value.match(regExp);
            fileName.textContent = valueStore;
        }

    });
</script>

<!-- Notification adding -->
<?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>


</body>
</html>