<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php linkCSS("payment"); ?>
    <?php linkCSS("navigation"); ?>
</head>


<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>
    <html>

    <body>
        <div class="payment-form">
            <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
                <input type="hidden" name="merchant_id" value="1218882"> <!-- Replace your Merchant ID -->
                <input type="hidden" name="return_url" value="http://localhost/partyak/paymentsuccess">
                <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
                <input type="hidden" name="notify_url" value="http://localhost/partyak/paymentsuccess">
                <br><br>Item Details<br>
                <input type="text" name="order_id" value="ItemNo12345">
                <input type="text" name="items" value="Wedding Hall"><br>
                <input type="text" name="currency" value="LKR">
                <input type="text" name="amount" value="1000">
                <br><br>Customer Details<br>
                <input type="text" name="first_name" value="Saman">
                <input type="text" name="last_name" value="Perera"><br>
                <input type="text" name="email" value="samanp@gmail.com">
                <input type="text" name="phone" value="0771234567"><br>
                <input type="text" name="address" value="No.1, Galle Road">
                <input type="text" name="city" value="Colombo">
                <input type="hidden" name="country" value="Sri Lanka"><br><br>
                <input class="button" type="submit" value="Buy Now">
            </form>
        </div>
    </body>


    </html>
</body>

</html>