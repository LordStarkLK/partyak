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

                    <div class="search">
                        <span class="text">   View users...</span>
                        <input type="text" name="search" placeholder="Enter service name to search...">
                        <button><i class="fas fa-search"></i></button>
                    </div>


                </div>



                <ul class="breadcrumb">

                </ul>

                <div class="sales-boxes">

                    <table>
                        <tr>
                            <th>Bookings Id</th>
                            <th>Customer</th>
                            <th>Service</th>
                            <th>Package</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>More actions</th>

                        </tr>
                        <tr>
                            <?php while($row = mysqli_fetch_assoc($data['booking'])){
                                $row2 = mysqli_fetch_assoc($data['customer']);
                                $row3 = mysqli_fetch_assoc($data['service']);
                                $row4 = mysqli_fetch_assoc($data['package']);
                                echo"
                                <td>$row[booking_id]</td>
                                <td>$row2[f_name] $row2[l_name]</td>
                                <td>$row3[service_name]</td>
                                <td>$row4[package_name]</td>
                                <td>$row[status]</td>
                                <td>$row[event_date]</td>
                                <td>
                                <div class=\"btn-group\">
                                    <button onclick=\"window.location='".BASEURL."/adminVendorBookings'\">See in Vendor Bookings</button>
                                    <button onclick=\"window.location='" . BASEURL . "/adminBookings/delete/$row[booking_id]'\">Delete Booking</button>

                                </div>
                            </td>
                            </tr>

                                ";
                            } ?>
                        

                        <!-- <tr>
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

                        </tr> -->


                    </table>



        </section>
    </div>

    <?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>


    
    <?php linkJS("admin/bookings");?>
    <?php linkJS("adminHomeView"); ?>




</body>

</html>