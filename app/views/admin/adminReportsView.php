<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <?php linkCSS("admin/adminReports"); ?>
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
                <span class="dashboard">Reports</span>
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
            <div class="container-reports">
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <h3>Report 1</h3>
                            <p>Most popular vendor of each category.</p>
                            
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <h3>Report 2</h3>
                            <p>Vendors with the highest rating</p>
                           
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <h3>Report 3</h3>
                            <p>Sales revenue generated by Partyak</p>
                            
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <h3>Report 4</h3>
                            <p>Income gained through Partyak</p>
                            
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <h3>Card 5</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                        </div>
                    </div>



                </div>



            </div>






        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>