<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("eventPlanner/epMyEvent"); ?>
    <?php linkCSS("navigation"); ?>
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
                    <a href="<?php echo BASEURL . '/epAnalytics'; ?>">
                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        <span class="links_name">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epProfile'; ?>">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <span class="links_name">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epService'; ?>">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <span class="links_name">Services</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epBooking'; ?>">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="links_name">Booking</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epMarketing'; ?>">
                        <i class="fa fa-sticky-note" aria-hidden="true"></i>
                        <span class="links_name">Marketing</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASEURL . '/epWallet'; ?>">
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
                    <a href="<?php echo BASEURL . '/epReview '; ?>">
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
                <li>
                    <a href="<?php echo BASEURL . '/epmyevent '; ?>">
                        <i class='bx bx-history' aria-hidden="true"></i>
                        <span class="links_name">My Event</span>
                    </a>
                </li>
            </ul>
        </div>

        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard">My Event</span>
                </div>
            </nav>
            <div class="glass-card-section">
                <div class="glass card">
                    <h1 class="card-date">24/10</h1>
                    <span class="card-description">
                        <p class="description-title">Office Party</p>
                        <p class="description-place">Galadari Hotel</p>
                    </span>
                    <span class="card-button">
                        <button class="card-btn">View</button>
                    </span>
                </div>
            </div>
            <div class="add-note-div">
                <h3 class="add-note">Add a note</h3>
                <img class="add-btn" <?php srcIMG("addButton.png") ?>>
            </div>
        </section>
    </div>
    <?php linkJS("vendor/spProfile"); ?>
</body>

</html>