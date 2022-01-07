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
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("payment.png") ?> width="40"
                                height="40">
                            <div class="box-topic">Payments</div>
                        </span>


                    </div>

                    <div class="box" id="box-marketing" onclick="window.location='<?php echo BASEURL . '/adminPaymentVendor'; ?>'">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("settlement.png") ?>
                                width="40" height="40" >
                            <div class="box-topic">Settlements</div>
                        </span>


                    </div>


                </div>

                <div class="pill-nav">
                    <a href="<?php echo BASEURL .'/adminPayment'; ?>">Customers</a>
                    <a class="active">Marketing</a>

                </div>

                <ul class="breadcrumb">
                    <li><a href="#">payments</a></li>
                    <li><a href="#">Marketing</a></li>
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
                            <th>Customer Name</th>
                            <th>Vendor </th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Payment Status</th>
                            <th>Paid amount</th>
                            <th>Total</th>

                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Jk Photography</td>
                            <td>Platinum package + addtional album</td>
                            <td>Sep 10 2021</td>
                            <td>Advance paid</td>
                            <td>Rs. 5000</td>
                            <td>Rs. 25000</td>
                        </tr>

                        <tr>
                            <td>Joe Rogan</td>
                            <td>Sunrise Catering</td>
                            <td>Standard package + additional soft drinks</td>
                            <td>Sep 20 2021</td>
                            <td>Advance paid</td>
                            <td>Rs. 3000</td>
                            <td>Rs. 60000</td>
                        </tr>

                        <tr>
                            <td>Brad Hogg</td>
                            <td>Pan Venues</td>
                            <td>Platinum package</td>
                            <td>Sep 30 2021</td>
                            <td>Advance paid</td>
                            <td>Rs. 10000</td>
                            <td>Rs. 60000</td>
                        </tr>


                    </table>



        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>