<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("eventPlanner/epNoteAdd"); ?>
    <?php linkCSS("navigation"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ep Note Add</title>
</head>

<body>
    <img class="back-blob" <?php srcIMG("home-blob.png") ?> alt="back blob">
    <header>
        <?php linkPhp("vendorNavigation") ?>
    </header>
    <div class="container glass center">
        <a href="<?php echo BASEURL . '/epNote'; ?>"><button class="btn back">Back</button></a>
        <form action="<?php echo BASEURL . '/epNoteAdd/index'; ?>" class="form-area" method="POST">
            <input class="small-input" type="text" name="order_id" placeholder="Order Id">
            <input class="small-input" type="text" name="cutom_name" placeholder="Customer Name"><br>
            <input class="note" type="text" name="note" placeholder="Note"><br>
            <button type="submit" class="btn" value="Submit">Add</button>
        </form>
    </div>
</body>

</html>