<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <?php linkCSS("admin/adminReview"); ?>
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
                        <span class="links_name"><img class="customer-image" <?php srcIMG("re.png") ?> width="50"
                                height="50">
                            <div class="box-topic">Reviews</div>
                        </span>

                    </div>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a>Reviews</a></li>

                    </ul>
                </div>


                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search by vendor.." name="search">

                        <button type="submit"><i class="fa fa-search"></i></button>
                        <!-- <i class="fas fa-search"></i> -->


                    </form>
                </div>






                <ul class="breadcrumb">

                </ul>

                <div class="sales-boxes">

                    <table>
                        <tr>
                            <th>Review ID</th>
                            <th>Vendor </th>
                            <th>Vendor type</th>
                            <th>Reviewed By</th>
                            <th>Rating()         </th>
                            <th>Review</th>

                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Sean Lewis</td>
                            <td>Event Planner</td>
                            <td>Jake Paul</td>
                            <td>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </td>
                            <td>Great service and assistance keep it up!</td>

                        </tr>

                        <tr>
                            <td>02</td>
                            <td>JK photography</td>
                            <td>Photographer</td>
                            <td>Logan Paul</td>
                            <td>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                            <td>Need  to improve but appreciate the service</td>

                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Hotel Oki doki</td>
                            <td>Venue</td>
                            <td>Eddie alvarez</td>
                            <td>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </td>
                            <td>Ideal venue for a wedding! loved it</td>

                        </tr>


                    </table>



        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>