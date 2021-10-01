<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

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
                <span class="dashboard">USERS</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("payment.png") ?> width="40"
                                height="40">
                            <div class="box-topic">Payment</div>
                        </span>

                    </div>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a>Payment</a></li>

                    </ul>
                </div>
                <div class="pill-nav">
                    <a  href="<?php echo BASEURL . '/adminPayment' ?>">Customer</a>
                    <a class="active" href="">vendor</a>

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
                            <th>Payment ID</th>
                            <th>Vendor </th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Payment Status</th>
                            <th>Total</th>

                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Jk Photography</td>
                            <td>Monthly Payment</td>
                            <td>Sep 10 2021</td>
                            <td>Paid</td>
                            
                            <td>Rs. 25000</td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Jk Photography</td>
                            <td>Monthly Payment</td>
                            <td>Sep 10 2021</td>
                            <td>Paid</td>
                            
                            <td>Rs. 25000</td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Jk Photography</td>
                            <td>Monthly Payment</td>
                            <td>Sep 10 2021</td>
                            <td>Paid</td>
                            
                            <td>Rs. 25000</td>
                        </tr>
            

            </table>



        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>