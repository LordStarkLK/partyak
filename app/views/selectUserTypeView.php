<!DOCTYPE html>
<html lang="en">

<head>
    <?php linkCSS("selectUSerTypeView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Select User Type</title>
</head>

<body>
    <header>
    <?php linkPhp("navigation") ?>
    </header>
    <div class="container">
        <div class="container-asVendor">
            <h1>as a<br> vendor</h1>
            <div class="glass-asVendor">
                <!-- <img class="imgBlobLeft" src="../../public/images/rightblob.png" alt="blob left" > -->
                <img <?php srcIMG("vendor.png") ?> alt="pick vendor image">
            </div>
            <div class="button-asVendor">
                <button type="button" class="buttonVendor" name="vendor" onclick="window.location.href='<?php echo BASEURL . '/vendorRegister/index'; ?>';"><a> Register </a> </button>
                
                <!-- <input type="submit" value="Register" class="button"> -->
            </div>
        </div>
        <div class="container-asCustomer">
            <h1>as a<br> customer</h1>
            <div class="glass-asCustomer">
                <!-- <img class="imgBlobRight" src="../../public/images/leftblob.png" alt="blob right" > -->

                <img <?php srcIMG("customer.png") ?> alt="pick customer image">
            </div>
            <div class="button-asCustomer" >
                <button type="button" class="buttonCustomer" name="customer" onclick="window.location.href='<?php echo BASEURL . '/customerRegister/index'; ?>';"><a>Register</a></button>
            </div>
        </div>
    </div>
    <?php linkPhp("footer") ?>
</body>

</html>