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
            <h2>45</h2>
            <h4>Guests</h4>
        </div>
        <div class="place card">
            <h2>Galadari Hotel</h2>
            <h4>at</h4>
        </div>
        <div class="date card">
            <h2>2022</h2>
            <h3>May/24</h3>
            <h4>on</h4>
        </div>
    </div>
    <div class="description-section">
        <h2>Description</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <?php linkPhp("footer") ?>
    <?php
?>
</body>

</html>