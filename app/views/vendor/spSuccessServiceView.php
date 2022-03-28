<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="successAddSer.css"> -->
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("footer"); ?>
    <?php linkCSS("vendor/spSuccessService"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>add Service</title>
</head>
<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>
    <div class="successContainer">
        <div class="successContent">
            <div class="container-top">
                
                    <div class="success-icon"><i class="fa fa-check fa-3x" aria-hidden="true"></i></div>
                      
            </div>
            <div class="container-bottom">
                <div class="title"><a>ADDING SUCCESSFUL !</a></div>
                
                
                <div class="description"><a>You have successfully added a new service  and verification will be informed within few days.</a></div>
                <div class="action">
                    <button class="continueBtn"><a href="<?php echo BASEURL . '/spBusiness'; ?>">Continue<a><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
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