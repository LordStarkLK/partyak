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
    <?php 
            $user = $data['user'];
            if($user['user_type'] == 'vendor'){
                $vendor = $data['vendor'];
            }
        ?>
        <?php linkPHP("adminSidebar");?>
        <section class="home-section">

            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
                <span class="dashboard">USERS/PROFILE</span>
            </div>

            <div class="home-content">

                <div class="profile_pic">
                    <div class="image">
                    <img src="<?php echo BASEURL; ?>/public/img/userImages/<?php if ($user['profilePicture']) {
                    echo $user['profilePicture'];
                    } 
                    else {
                        echo "pp_default.png";
                    } ?>" >
                        <!-- <img src="/public/img/avatar.png" alt="Avatar"> -->
                    </div>

                    <!-- <div class="url">
                        <div class="facebook">
                            <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
                            <div class="socialLink">
                                <a href="fblink">https://www.facebook.com/dilsithmi.abeywickrama</a>
                            </div>
                        </div>
                        <div class="linkedin">
                            <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
                            <div class="socialLink">
                                <a href="linkedinlink">https://www.linkedin.com/in/dilsithmi.abeywickrama</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="profile_details">
                    <?php
                        
                        $user = $data['user'];
                        if($user['user_type'] == 'vendor'){
                            $vendor = $data['vendor'];
                        }
                        echo "
                        <div class=\"personal_info\">
                        <a>Personal Information</a>
                        
                        <div class=\"row\">
                            <div class=\"col_name\">
                                <label for=\"fname\">First Name</label>
                            </div>
                            <div class=\"col_data\">
                                <p>$user[f_name]</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col_name\">
                                <label for=\"lname\">Last Name</label>
                            </div>
                            <div class=\"col_data\">
                                <p>$user[l_name]</p>
                            </div>
                        </div>
                    
                        <div class=\"row\">
                    <div class=\"col_name\">
                        <label for=\"gender\">Gender</label>
                    </div>
                    <div class=\"col_data\">
                        <p>$user[gender]</p>
                    </div>
                    
                    </div>
                    <div class=\"row\">
                            <div class=\"col_name\">
                                <label for=\"fname\">Email</label>
                            </div>
                            <div class=\"col_data\">
                                <p>$user[email]</p>
                            </div>
                        </div>
                        <div class=\"row\">
                    <div class=\"col_name\">
                        <label for=\"nic\">NIC number</label>
                    </div>
                    <div class=\"col_data\">
                        <p>$user[nic]</p>
                    </div>
                </div>
                ";

                if($user['user_type'] == 'vendor') {
                    echo "
                
        </div>
        <div class=\"bank_info\">
            <a>Bank Account Information</a>
    
            <div class=\"row\">
                <div class=\"col_name\">
                    <label for=\"accname\">Acc: Number</label>
                </div>
                <div class=\"col_data\">
                    <p>$vendor[account_number]</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col_name\">
                    <label for=\"accholdername\">Acc: Holder Name</label>
                </div>
                <div class=\"col_data\">
                    <p>$vendor[account_holder_name]</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col_name\">
                    <label for=\"bank\">Bank Name</label>
                </div>
                <div class=\"col_data\">
                    <p>$vendor[bank_name]</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col_name\">
                    <label for=\"branch\">Branch Name</label>
                </div>
                <div class=\"col_data\">
                    <p>$vendor[branch]</p>
                </div>
            </div>
            
        </div>
        ";
                }

            


    ?>
    </div>

    </div>


    </section>
    </div>




    <?php linkJS("adminHomeView");?>


</body>

</html>