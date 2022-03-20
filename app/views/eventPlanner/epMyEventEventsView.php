<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("eventPlanner/epMyEventEvents"); ?>
    <?php linkCSS("footer"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ep My Event Events</title>
</head>

<body>
    <header>
        <?php linkPhp("vendorNavigation") ?>
    </header>
    <div class="image-carousel">
        <div class="image-slide">
        <img id="last-clone" <?php srcIMG("event-planner/download4.jpg") ?>>
        <img <?php srcIMG("event-planner/download.jpg") ?>>
        <img <?php srcIMG("event-planner/download2.jpg") ?>>
        <img <?php srcIMG("event-planner/download3.jpg") ?>>
        <img <?php srcIMG("event-planner/download4.jpg") ?>>
        <img id="first-clone" <?php srcIMG("event-planner/download.jpg") ?>>
        </div>
        <button id=prevBtn>Prev</button>
        <button id=nextBtn>Next</button>
    </div>
    <div class="details-card">
        <div class="guest card">
            <h2> <?php echo $data['eventDetails']['no_of_guests'];?></h2>
            <h4>Guests</h4>
        </div>
        <div class="place card">
            <h2> <?php echo $data['eventDetails']['location'];?></h2>
            <h4>at</h4>
        </div>
        <div class="date card">
            <h2> <?php echo $data['eventDetails']['year'];?></h2>
            <h3> <?php echo $data['eventDetails']['month']."/".$data['eventDetails']['day'];?></h3>
            <h4>on</h4>
        </div>
    </div>
    <div class="description-section">
        <h2>Description</h2>
        <p><?php echo $data['eventDetails']['description'];?></p>
    </div>
    <?php linkPhp("footer") ?>
    <?php linkJS("eventPlanner/epEventPlannerEventEvents");
?>
</body>

</html>