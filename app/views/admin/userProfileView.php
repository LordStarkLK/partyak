<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/userProfile"); ?>
    <?php linkCSS("css/all"); ?>



    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">

        <?php linkPHP("adminSidebar");?>
        <section class="home-section">

            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
                <span class="dashboard">USERS/PROFILE</span>
            </div>
            
            <div class="home-content">
                
                <div class="profile_pic">
                    <div class="image">
                        <img <?php srcIMG("avatar.png") ?> alt="Avatar">
                        <!-- <img src="/public/img/avatar.png" alt="Avatar"> -->
                    </div>

                    <div class="url">
                        <div class="facebook">
                            <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
                            <div class="socialLink">
                                <a href="fblink">https://www.facebook.com/lara.fernando</a>
                            </div>
                        </div>
                        <div class="linkedin">
                            <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
                            <div class="socialLink">
                                <a href="linkedinlink">https://www.linkedin.com/in/lara-fernando</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile_details">
                    <div class="personal_info">
                        <a>Personal Information</a>
                        <div class="edit"><a href="#">Edit</a></div>
                        <div class="row">
                            <div class="col_name">
                                <label for="fname">First Name</label>
                            </div>
                            <div class="col_data">
                                <p>Lara</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="lname">Last Name</label>
                            </div>
                            <div class="col_data">
                                <p>Fernando</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="uname">User Name</label>
                            </div>
                            <div class="col_data">
                                <p>Lara98</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col_data">
                                <p>Female</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="nic">NIC number</label>
                            </div>
                            <div class="col_data">
                                <p>985496210V</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="email">Email</label>
                            </div>
                            <div class="col_data">
                                <p>lara@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="bank_info">
                        <a>Bank Account Information</a>
                        <div class="edit"><a href="#">Edit</a></div>
                        <div class="row">
                            <div class="col_name">
                                <label for="accname">Acc: Number</label>
                            </div>
                            <div class="col_data">
                                <p>1234567890</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="accholdername">Acc: Holder Name</label>
                            </div>
                            <div class="col_data">
                                <p>Lara Fernando</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="bank">Bank Name</label>
                            </div>
                            <div class="col_data">
                                <p>Sampath</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="branch">Branch Name</label>
                            </div>
                            <div class="col_data">
                                <p>Matara</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="bcode">Branch Code</label>
                            </div>
                            <div class="col_data">
                                <p>1221</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>
    </div>




<?php linkJS("adminHomeView");?>


</body>

</html>