<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("footer");?>
    <?php linkCSS("vendor/spConError"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>add Service</title>
</head>
<body>
<header>
    <?php linkPhp("navigation") ?>
</header>
    <div class="delContainer">
        <div class="delContent">
            <div class="container-top">
                <!-- <div class="delete-icon"> -->
                    <div class="del-icon"><i class="fa fa-exclamation fa-3x" aria-hidden="true"></i></div>
                    
                    <!-- <img src="avatar1.png" alt="Avatar" class="reviewer-pic"> -->
                <!-- </div> -->
            </div>
            <div class="container-bottom">
                <div class="title"><a>AN ERROR OCCURRED !</a></div>
                
                <!-- <div class="ser-name"><a>Mount Lavinia Hotel</a><br><a>Colombo, Sri Lanka</a></div> -->
                <div class="description"><a>Failed to add service. Please try again in a few minutes.</a></div>
                <div class="action">
                    <button class="deleteBtn"><a href="<?php echo BASEURL . '/spBusiness'; ?>">Continue<a><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        
    </div>
<?php linkPhp("footer") ?>
</body>
</html>