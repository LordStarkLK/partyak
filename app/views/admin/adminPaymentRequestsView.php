<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminPayment"); ?>
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
                <span class="dashboard">PAYMENTS & SETTLEMENTS</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing"
                        onclick="window.location='<?php echo BASEURL . '/adminPayment'; ?>'">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("payment.png") ?> width="40"
                                height="40">
                            <div class="box-topic">Payment</div>
                        </span>

                    </div>

                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("settlement.png") ?>
                                width="40" height="40">
                            <div class="box-topic">Settlements</div>
                        </span>


                    </div>


                </div>

                <div class="pill-nav">
                    <a class="active" href="">Requests</a>
                    <a href="<?php echo BASEURL . '/adminPaymentVendor/payments' ?>">Payments</a>

                </div>
                <div class="horizontal-container">

                <ul class="breadcrumb">
                    <li><a >Settlements</a></li>
                    <li><a >Requests</a></li>
                </ul>

                    <button class="addnew-button" id="myBtn" style="vertical-align:middle"><span>Add new
                        </span></button>

                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Add payment</h2>

                            <div class="popup-container">
                                <div class="popup-left">
                                    <div class = "input-details">
                                        <form action="/action_page.php">
                                            <div>
                                                <p>User_id of Vendor</p>
                                                <input type="text" placeholder="user_id" name="search">
                                            </div>
                                            <div>
                                                <p>Amount Payed: </p>
                                                <input type="text" placeholder="amount (lkr)" name="search">
                                            </div>
                                            <div>
                                                <p>Description: </p>
                                                <input type="text" placeholder="description" name="search">
                                            </div>
                                            <div>
                                                <p>Payment Date: </p>
                                                <input type="date" placeholder="description" name="search">
                                            </div>





                                            <!-- <i class="fas fa-search"></i> -->


                                        </form>


                                    </div>

                                </div>
                                <div>
                                <div class="submission_area">
                                    
                                    <div class="title"><a>Upload Your File</a></div>
                                    <div class="sub_title"><a>(File should be JPG, JPEG or PNG)</a></div>
                                    <!-- here newly added codes -->
                                    <div class="upload-container">
                                        <div class="wrapper">
                                            <div class="image">
                                                <img id="contentImg" src="" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="icon">
                                                    <i class="fas fa-cloud-upload-alt"></i>
                                                </div>
                                                <div class="text">
                                                    No file chosen, yet!
                                                </div>
                                            </div>
                                            <div id="cancel-btn">
                                                <i class="fas fa-times"></i>
                                            </div>
                                            <div class="file-name">
                                                File name here
                                            </div>
                                        </div>

                                        <button type="file" name="file" onclick="defaultBtnActive()"
                                            id="custom-btn">Choose a
                                            file</button>

                                        <form action="<?php echo BASEURL . '/spMarketing/index'; ?>" method="POST"
                                            enctype="multipart/form-data">

                                            <input id="default-btn" type="file" name="file" hidden>
                                            
                                    </div>

                                   




                                </div>
                                <button class="submit-button">Submit</button>
                                </div>



                            </div>


                        </div>

                    </div>


                </div>


                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search users.." name="search">

                        <button type="submit"><i class="fa fa-search"></i></button>
                        <!-- <i class="fas fa-search"></i> -->


                    </form>
                </div>






                <ul class="breadcrumb">

                </ul>

                <div class="sales-boxes">

                    <table>
                        <tr>
                            <th>Request ID</th>
                            <th>Vendor Name</th>
                            <th>User Id of Vendor</th>
                            <th>Requested Amount</th>
                            <th>withdrawable Amount</th>
                            <th>Status</th>

                        </tr>
                        <tr>
                        <?php 
                        
                        while($row = mysqli_fetch_assoc($data['request'])){

                        
                                echo"
                                <td>$row[request_id]</td>
                                <td>$row[f_name] $row[l_name]</td>
                                <td>$row[user_id]</td>
                                <td>Rs.".number_format($row['req_amount'],2,'.',',')."</td>
                                <td>Rs.".number_format($row['withdrawable_amount'],2,'.',',')."</td>
                                <td>$row[status]</td>
                                
                            </tr>

                                ";
                            } ?>

                        <!-- <tr>
                            <td>02</td>
                            <td>Sunrise Catering</td>
                            <td>Monthly Payment</td>
                            <td>Sep 10 2021</td>
                            <td>Paid</td>

                            <td>Rs. 10000</td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>R DJs</td>
                            <td>Requested Payment</td>
                            <td>Oct 20 2021</td>
                            <td>Pending</td>

                            <td>Rs. 25000</td>
                        </tr> -->


                    </table>



        </section>
    </div>
    <?php linkJS("admin/adminPayment");?>
    <?php linkJS("adminHomeView"); ?>






</body>

</html>