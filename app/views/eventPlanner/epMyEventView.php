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
           <?php if(isset($data['event'])){foreach ($data['event'] as $row) { ?>
            <div class="glass-card-section">
                <div class="glass card">
                    <h1 class="card-date"><?php echo $row['month']."/". $row['date']?></h1>
                    <span class="card-description">
                        <p class="description-title"><?php echo $row['event_type'] ?></p>
                        <p class="description-place"><?php echo $row['location'] ?></p>
                    </span>
                    <span class="card-button">
                        <a href="<?php echo BASEURL . '/epMyEventEvents/index/'; echo $row["event_page_id"]; ?>"><button class="card-btn">View</button></a>
                    </span>
                </div>
            </div> <?php }} ?>
            <div class="add-note-div">
                <h3 class="add-note">Add an event</h3>
                <a href="<?php echo BASEURL . '/epEventAdd'; ?>"><img class="add-btn" <?php srcIMG("addButton.png") ?>></a>
            </div>
        </section>
    </div>
     <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

    <?php linkJS("vendor/spProfile"); ?>

</body>

</html>