<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminEvents"); ?>

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
                <span class="dashboard">Bookings</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("bookings.png") ?> width="40"
                                height="40">
                            <div class="box-topic">Bookings</div>
                        </span>

                    </div>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a>Bookings</a></li>

                    </ul>

                    <div class="search-container">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Search by customer.." name="search">

                            <button type="submit"><i class="fa fa-search"></i></button>
                            <!-- <i class="fas fa-search"></i> -->


                        </form>
                    </div>


                </div>



                <ul class="breadcrumb">

                </ul>

                <div class="sales-boxes">

                    <table>
                        <tr>
                            <th>Customer Name</th>
                            <th>Vendor Name</th>
                            <th>Type</th>
                            <th>Booking Date</th>
                            <th>More Options</th>

                        </tr>
                        <tr>
                            <td>Paulo Costa</td>
                            <td>Halo hotels</td>
                            <td>Venues and halls</td>
                            <td>10 June 2022</td>
                            <td>
                                <div class="btn-group">
                                    <button onclick="window.location='<?php echo BASEURL . '/adminVendorBookings'; ?>'">See in Vendor Bookings</button>
                                    <button >Delete</button>

                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>Kane Williamson</td>
                            <td>Flip Saloons
                            <td>Saloon</td>
                            <td>18 December 2021</td>
                            <td>
                            <div class="btn-group">
                                    <button onclick="window.location='<?php echo BASEURL . '/adminVendorBookings'; ?>'">See in Vendor Bookings</button>
                                    <button >Delete</button>

                                </div>
                            </td>

                        </tr>
                        <tr>

                            <td>Liyoto Machita</td>
                            <td>Ken Catering</td>
                            <td>Catering</td>
                            <td>19 January 2021</td>
                            <td>
                            <div class="btn-group">
                                    <button onclick="window.location='<?php echo BASEURL . '/adminVendorBookings'; ?>'">See in Vendor Bookings</button>
                                    <button >Delete</button>

                                </div>
                            </td>

                        </tr>


                    </table>



        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>