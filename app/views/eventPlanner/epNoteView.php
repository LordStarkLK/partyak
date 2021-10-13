<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("eventPlanner/epNote"); ?>
    <?php linkCSS("vendorNavigation"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <img class="back-blob" <?php srcIMG("home-blob.png") ?> alt="back blob">
    <header>
        <?php linkPhp("vendorNavigation") ?>
    </header>
    <div class="container">
        <div class="sidebar">

            <ul class="sidenav-links">
                <li>
                    <a href="<?php echo BASEURL . '/spAnalytics'; ?>">
                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        <span class="links_name">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/spProfile'; ?>">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <span class="links_name">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/spService'; ?>">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <span class="links_name">Services</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/spBooking'; ?>">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="links_name">Booking</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/spMarketing'; ?>">
                        <i class="fa fa-sticky-note" aria-hidden="true"></i>
                        <span class="links_name">Marketing</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASEURL . '/spWallet'; ?>">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <span class="links_name">Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span class="links_name">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span class="links_name">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/spReview '; ?>">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span class="links_name">Review</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epnote '; ?>">
                        <i class='bx bx-notepad' aria-hidden="true"></i>
                        <span class="links_name">Note</span>
                    </a>
                </li>
            </ul>
        </div>

        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard">Note</span>
                </div>
            </nav>
            <table class="table-content">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Order ID</th>
                        <th>Note</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>Kamal</th>
                        <th>6372</th>
                        <th>123 Photography,oneshot bar,punsara....</th>
                        <th class="view-note">View note</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>Namal</th>
                        <th>9375</th>
                        <th>123 Photography,oneshot bar,punsara....</th>
                        <th class="view-note">View note</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>Amal</th>
                        <th>8452</th>
                        <th>123 Photography,oneshot bar,punsara....</th>
                        <th class="view-note">View note</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>Kamal</th>
                        <th>7345</th>
                        <th>123 Photography,oneshot bar,punsara....</th>
                        <th class="view-note">View note</th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th>Kamal</th>
                        <th>7453</th>
                        <th>123 Photography,oneshot bar,punsara....</th>
                        <th class="view-note">View note</th>
                    </tr>
                </tbody>
            </table>
            <div class="add-note-div">
                <h3 class="add-note">Add a note</h3>
                <img class="add-btn" <?php srcIMG("addButton.png") ?>>
            </div>
        </section>
    </div>
    <?php linkJS("vendor/spProfile"); ?>
</body>

</html>