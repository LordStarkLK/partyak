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
                    <div class="box" id="box-marketing" onclick="window.location='<?php echo BASEURL . '/adminPayment'; ?>'">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("payment.png") ?> width="40"
                                height="40">
                            <div class="box-topic">Settlements</div>
                        </span>


                    </div>

                    <div class="box" id="box-marketing" >
                        <span class="links_name"><img class="customer-image" <?php srcIMG("settlement.png") ?>
                                width="40" height="40" >
                            <div class="box-topic">Settlements</div>
                        </span>


                    </div>


                </div>

                <div class="pill-nav">
                    <a class="active" href="">Requests</a>
                    <a href="<?php echo BASEURL . '/adminPaymentVendor/payments' ?>">Payments</a>

                </div>

                <ul class="breadcrumb">
                    <li><a href="#">Settlements</a></li>
                    <li><a href="#">Payments</a></li>
                </ul>


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

    <?php linkJS("adminHomeView"); ?>




</body>

</html>