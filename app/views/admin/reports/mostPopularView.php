<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/reports"); ?>
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
                <span class="dashboard">REPORTS</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("reports.webP") ?> width="40"
                                height="40">
                            <div class="box-topic">Reports</div>
                        </span>

                    </div>

                </div>






            </div>

            <ul class="breadcrumb">
                <li><a href="#">Reports</a></li>
                <li><a href="#">Most Popular Vendors</a></li>
            </ul>

            <div class="top5">
                <h1>Top 5 vendors (October 2021)</h1>
                <ol>
                    <li> JK photography | 35 bookings </li>
                    <li> Sunrise Catering | 33 bookings </li>
                    <li> DJ brady | 30 bookings </li>
                    <li> Hopkins Hotel | 20 bookings </li>
                    <li> Kingsbury | 18 bookings </li>
                </ol>

            </div>


            <div class="filter-container">
                <div class="dropdown-container">
                    <p class=drop>Time Period</p>
                    <i class="fas fa-caret-down"></i>

                </div>
                <div class="dropdown-container">
                    <p class="drop">Vendor Type</p>
                    <i class="fas fa-caret-down"></i>

                </div>
                <div class="dropdown-container">
                    <p class="drop">Category </p>
                    <i class="fas fa-caret-down"></i>

                </div>
            </div>

            <div class="filter-values">
                <div class="chip">
                    This Month
                    <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                </div>

                <div class="chip">
                    Service Provider
                    <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                </div>

                <div class="chip">
                    Photography
                    <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                </div>
            </div>

            <div class="sales-boxes">

                <table>
                    <tr>
                        <th>Vendor</th>
                        <th>Category</th>
                        <th>Time period</th>
                        <th>No of bookings</th>


                    </tr>
                    <tr>

                        <td>Jk Photography</td>
                        <td>Photography</td>
                        <td>This month</td>
                        <td>35</td>

                    </tr>

                    <tr>
                        <td>Bob Photography</td>
                        <td>Photography</td>
                        <td>This month</td>
                        <td>10</td>

                    </tr>

                    <tr>
                        <td>Turkey Photography</td>
                        <td>Photography</td>
                        <td>This month</td>
                        <td>8</td>

                    </tr>


                </table>

            </div>










        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>