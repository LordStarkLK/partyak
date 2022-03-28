<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php linkCSS("paymentSuccessful"); ?>
    <?php linkCSS("navigation"); ?>
    <?php $reciept = $data["reciept"]; ?>
</head>


<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>
    <html>

    <body>
        <div class="container">
            <h1>Payment Successful!</h1><br>
            <p><br>Payment Order ID : <?php echo $reciept["payment_id"]; ?></p>
            <p><br>Payment Amount : <?php echo $reciept["amount"]; ?></p>
            <p><br>Payment Date and Time : <?php echo date_format(new DateTime($reciept["payment_date"]),'Y-m-d H:i:s')?></p>
            <button type="button" class="okbtn" ><a href="<?php echo BASEURL . '/customerProfileBooking'; ?>">OK</a></button>
        </div>

    </body>

    </html>
</body>

</html>