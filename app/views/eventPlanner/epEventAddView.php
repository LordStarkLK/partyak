<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("eventPlanner/epAddEvent"); ?>
    <?php linkCSS("navigation"); ?>
    <title>Document</title>
</head>

<body>
    <header>
        <?php linkPhp("vendorNavigation") ?>
    </header>
    <div class="container">
        <div class="glass center form_area">
            <a href="<?php echo BASEURL . '/epMyEvent'; ?>"><button class="btn back">Back</button></a>
            <form action="<?php echo BASEURL . '/epEventAdd/addEvent'; ?>" class="form-area" method="POST" enctype="multipart/form-data">
                <input type="text" name="event_type" placeholder="Event Type" required><br>
                <input type="date" name="date" placeholder="Date" required><br>
                <input type="text" name="no_of_guests" placeholder="No of Guests" required><br>
                <h4 class="form-text">*Submit atleast 1 image</h4>
                <input class="form-file" type="file" name="file[]" required><br>
                <input class="form-file" type="file" name="file[]"><br>
                <input class="form-file" type="file" name="file[]"><br>
                <input class="form-file" type="file" name="file[]"><br>
                <input class="form-file" type="file" name="file[]"><br>
                <input type="text" name="location" placeholder="Location" required><br>
                <textarea class="description-text" id="description" name="description" rows="4" cols="50" placeholder="Description" required></textarea><br>
                <button type="submit" class="btn add" value="Submit">Add</button> 
            </form>
        </div>
    </div>
</body>

</html>
<!-- `user_id`, `event_page_id`, `date`, `event_type`, `no_of_guests`, `image1`, `image2`, `image3`, `image4`, `image5`, `Location`, `Description` -->