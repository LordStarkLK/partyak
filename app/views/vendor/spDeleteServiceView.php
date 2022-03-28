<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="deleteSer.css"> -->
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("vendor/spDeleteService"); ?>
    <?php linkCSS("footer"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Delete Service</title>
</head>
<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>
    <div class="delContainer">
        <div class="delContent">
            <div class="container-top">
                <!-- <div class="delete-icon"> -->
                    <div class="del-icon"><i class="fa fa-trash fa-3x" aria-hidden="true"></i></div>
                    
                    <!-- <img src="avatar1.png" alt="Avatar" class="reviewer-pic"> -->
                <!-- </div> -->
            </div>
            <div class="container-bottom">
                <div class="title"><a>You are about to delete a service!</a></div>
                
                <div class="ser-name"><a>Mount Lavinia Hotel</a><br><a>Colombo, Sri Lanka</a></div>
                <div class="description"><a>All the related details to the service will be deleted.</a><br><a>Are you sure?</a></div>
                <div class="action">
                    <button class="action-btn delete">Confirm</button>
                    <button class="action-btn cancel">Cancel</button>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

    <?php linkPhp("footer") ?>
</body>
</html>