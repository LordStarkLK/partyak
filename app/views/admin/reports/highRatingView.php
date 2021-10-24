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






            </div>

            <ul class="breadcrumb">
                <li><a href="#">Reports</a></li>
                <li><a href="#">Highest rated vendors</a></li>
            </ul>

            <div class="overview-boxes">
                <div class="box" id="box-marketing">
                    <h1>Total Reviews: </h1>
                    <h1>560</h1>


                </div>

                <div class="box" id="box-marketing">
                    <h1>4+ rated vendors: 150</h1>



                </div>

            </div>

            <div class="average-ratings">
                <span class="heading">Average Vendor Ratings: </span>
                <!-- <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span> -->
                <!-- <p>4.1 average based on 254 reviews.</p> -->
                <hr style="border:3px solid #f1f1f1">

                <div class="row">
                    <div class="side">
                        <div>4+ rated vendors</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-5"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>150</div>
                    </div>
                </div>
                <div class="row">
                    <div class="side">
                        <div>3+ rated vendors</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-4"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>63</div>
                    </div>
                </div>
                <div class="row">
                    <div class="side">
                        <div>2+ rated vendors</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-3"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>15</div>
                    </div>
                    <div class="side">
                    </div>
                </div>
                <div class="row">
                    <div class="side">
                        <div>1+ rated vendors</div>

                    </div>


                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-2"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>6</div>
                    </div>
                </div>
                <div class="row">
                    <div class="side">
                        <div>0 - 1 rated vendors</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-1"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>20</div>
                    </div>
                </div>

            </div>

            <div class="top5">
                <h1>Top 5 highest rated vendors (October 2021)</h1>
                <ol>
                    <li> JK photography &emsp;
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>

                    </li>
                    <li> Sunrise Catering &emsp;
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>

                    </li>
                    <li> DJ brady &emsp; &emsp; &emsp; &emsp;
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </li>
                    <li> Hopkins Hotel &emsp; &emsp; 
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </li>
                    <li> Kingsbury &emsp; &emsp; &emsp;
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </li>
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
                        <th>Rating</th>


                    </tr>
                    <tr>

                        <td>Jk Photography</td>
                        <td>Photography</td>
                        <td>This month</td>
                        <td>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        </td>

                    </tr>

                    <tr>
                        <td>Bob Photography</td>
                        <td>Photography</td>
                        <td>This month</td>
                        <td>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        </td>

                    </tr>

                    <tr>
                        <td>Turkey Photography</td>
                        <td>Photography</td>
                        <td>This month</td>
                        <td>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        </td>

                    </tr>


                </table>

            </div>










        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>