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
        <?php linkPhp("epSideBar") ?>

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