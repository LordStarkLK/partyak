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
                <span class="dashboard">PAYMENTS & SETTLEMENTS</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing"
                        onclick="window.location='<?php echo BASEURL . '/adminPayment'; ?>'">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("payment.png") ?> width="40"
                                height="40">
                            <div class="box-topic">Payments</div>
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
                    <a href="<?php echo BASEURL . '/adminPaymentVendor' ?>">Requests</a>
                    <a class="active">Payments</a>

                </div>



                <button class="addnew-button" id="myBtn" style="vertical-align:middle"><span>Add Payment
                    </span></button>

                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Add payment</h2>

                        <div class="popup-container">
                            <button type="file" name="file" id="photo" onclick="defaultBtnActive()"
                                id="custom-btn">Choose a
                                file</button>

                            <form action="<?php echo BASEURL . '/adminPaymentVendor/insertSettlement'; ?>" method="POST"
                                enctype="multipart/form-data">

                                <div class="popup-left">
                                    <div class="input-details">
                                        <div>
                                            <p>User_id of Vendor</p>
                                            <input type="text" placeholder="user_id" name="user_id">
                                        </div>
                                        <div>
                                            <p>Amount Payed: </p>
                                            <input type="text" placeholder="amount (lkr)" name="amount">
                                        </div>
                                        <div>
                                            <p>Description: </p>
                                            <input type="text" placeholder="description" name="description">
                                        </div>
                                        <div>
                                            <p>Payment Date: </p>
                                            <input type="date" placeholder="date" name="dateupload">
                                        </div>
                                        <div>
                                            <p>Payment Type: </p>
                                            <select name="type">
                                                <option value="Requested Payment">Requested Payment</option>
                                                <option value="Monthly Payment">Monthly Payment</option>

                                            </select>
                                        </div>
                                        <div>
                                            <p>Request ID: (If Payment is Requested)</p>
                                            <input type="text" placeholder="request_id" name="request_id">
                                        </div>






                                        <!-- <i class="fas fa-search"></i> -->





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

                                            <!-- <button type="file" name="file" id="photo" onclick="defaultBtnActive()"
                                            id="custom-btn" >Choose a
                                            file</button> -->


                                            <input id="default-btn" type="file" name="file" hidden>

                                        </div>






                                    </div>
                                    <button class="submit-button" type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                        



                    </div>


                </div>

            </div>







            <ul class="breadcrumb">

            </ul>

            <div class="sales-boxes">

                <table>
                    <tr>
                        <th>Payment Id</th>
                        <th>Paid amount</th>
                        <th>Vendor Name</th>
                        <th>Description</th>
                        <th>Wallet Total amount</th>
                        <th>Wallet Withdrawable Amount</th>
                        <th>Payment Slip</th>

                    </tr>
                    <tr>
                        <?php while($row = mysqli_fetch_assoc($data['payments'])){ 
                            
                            $row2 = mysqli_fetch_assoc($data['wallet']);
                            
                                echo"
                                <td>$row[payment_id]</td>
                                <td>Rs.".number_format($row['amount'],2,'.',',')."</td>
                                <td>$row[f_name] $row[l_name]</td>
                                <td>$row[description]</td>
                                <td>Rs.".number_format($row2['amount'],2,'.',',')."</td>
                                <td>Rs.".number_format($row2['withdrawable_amount'],2,'.',',')."</td>
                                <td><a target=\"_blank\" href=\"http://localhost/partyak/public/img/vendorPayments/$row[content]\"><img class=\"customer-image\" src=\"http://localhost/partyak/public/img/vendorPayments/$row[content]\"  width=\"60\" height=\"60\">


                                
                            </tr>

                                ";
                            } ?>



                </table>



        </section>
    </div>

    <?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>                        
    
    <?php linkJS("admin/adminPayment");?>
    <?php linkJS("admin/adminPaymentRequest") ?>;
    <?php linkJS("adminHomeView"); ?>




</body>

</html>