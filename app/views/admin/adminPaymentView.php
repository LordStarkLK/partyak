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
                    <a class="active" href="">Customers</a>
                    <a href="<?php echo BASEURL . '/adminPaymentMarketing' ?>">Marketing</a>

                </div>

                <ul class="breadcrumb">
                    <li><a href="#">payments</a></li>
                    <li><a href="#">Customers</a></li>
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
                            <th>Customer Name</th>
                            <th>Service </th>
                            <th>Package</th>
                            <th>Details</th>
                            <th>Date</th>
                            <th>Payment Status</th>
                            <th>Paid amount</th>
                            <th>Full Payment</th>

                        </tr>
                        <tr>
                        <?php while($row_payment = mysqli_fetch_assoc($data['payment'])){
                                $row_customer = mysqli_fetch_assoc($data['customer']);
                                $row_service = mysqli_fetch_assoc($data['service']);
                                $row_package = mysqli_fetch_assoc($data['package']);
                                $total = $row_package['per_unit_price']*$row_payment['noOfGuest'];
                                // function CurrencyFormat($number)
                                //     {
                                //         $decimalplaces = 2;
                                //         $decimalcharacter = '.';
                                //         $thousandseparater = ',';
                                //         return number_format($number,$decimalplaces,$decimalcharacter,$thousandseparater);
                                //     }

                                echo"
                                <td>$row_payment[payment_id]</td>
                                <td>$row_customer[f_name] $row_customer[l_name]</td>
                                <td>$row_service[service_name]</td>
                                <td>$row_package[package_name]</td>
                                <td>$row_package[per_unit_price] ($row_package[package_name]) x $row_payment[noOfGuest] individuals</td>
                                <td>$row_payment[payment_date]</td>
                                <td>$row_payment[status]</td>
                                <td>Rs.".number_format($row_payment['amount'],2,'.',',')."</td>
                                <td>Rs.".number_format($total,2,'.',',')."</td>

                                
                            </tr>

                                ";
                            } ?>



                    </table>



        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>