<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php linkCSS("payment"); ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("customerNavigation"); ?>

    <?php $paymentDet = $data['payment_det']; ?>
    
</head>


<body>
    <?php $booking_id = $data['booking_id']; ?>
    <?php $vendor_id = $data['vendor_id']; ?>
    <header>
    <?php
            if (!isset($_SESSION["type"])) {
                linkPhp("Navigation");
            } else {
                if ($_SESSION["type"] == "customer") {
                    linkPhp("customerNavigation");
                } else {
                    linkPhp("Navigation");
                }
            }

    ?>
    </header>
    <html>

    <body>
        <img class="background-blob" <?php srcIMG("home-blob.png") ?>>
        <div class="payment-form-container">
            <div class="first-section">
                <?php
                    if(!isset($paymentDet['amount'])){
                        echo " 
                        <h1>Total Amount : $paymentDet[full_payment]</h1>
                        <h1>Advance Amount :$paymentDet[advance_price]</h1>
                        ";

                    } 
                    else{
                        echo " 
                        <h1>Total Amount : $paymentDet[full_payment]</h1>
                        <h1>Paid Amount :$paymentDet[amount]</h1>
                        ";
                    }
                ?>
            </div>
            <div class="second-section">
                <div class="card-icon">
                    <img class="visa-icon" <?php srcIMG("visa-icon.png") ?>>
                    <h3 class="visa-card-number">1234 5678 9045 5678</h3>
                    <div class="credit-card-info">
                        <img class="visa-strip" <?php srcIMG("card-strip.png") ?>>
                        <!-- <div class="left-info">
                        <h4 class="card-user card-text small-text">Card user</h4><br>
                        <h3 class="name card-text">Amal Perera</h3>
                    </div>
                    <div class="right-info">
                        <h4 class="card-user card-text small-text">Expires</h4><br>
                        <h3 class="name card-text">10/25</h3>
                    </div> -->
                    </div>
                </div>
                <div class="payment-form">
                    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
                        <input class="input" type="hidden" name="merchant_id" value="1218882"> <!-- Replace your Merchant ID -->
                        <input class="input" type="hidden" name="return_url" value="http://localhost/partyak/paymentsuccess">
                        <input class="input" type="hidden" name="cancel_url" value="http://sample.com/cancel">
                        <input class="input" type="hidden" name="notify_url" value="http://localhost/partyak/paymentsuccess">

                        <input class="input" type="hidden" name="order_id" value="ItemNo12345">
                        <input class="input" type="hidden" name="items" value="Wedding Hall"><br>
                        <input class="input" type="hidden" name="currency" value="LKR">
                        <input class="input" type="number" name="amount" placeholder="Enter the Amount in Rs.">

                        <input class="input full-width" type="text" name="first_name" placeholder="First Name">
                        <input class="input full-width" type="text" name="last_name" placeholder="Second Name"><br>
                        <input class="input full-width" type="text" name="email" placeholder="E-Mail">
                        <input class="input" type="text" name="phone" placeholder="Phone Number"><br>
                        <input class="input" type="text" name="address" placeholder="Street">
                        <input class="input" type="text" name="city" placeholder="City">
                        <input class="input" type="hidden" name="country" placeholder="Sri Lanka"><br><br>
                        <input class="input" type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
                        <input class="input" type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>">
                        <input class="button" id="mySubmitButton" type="submit" value="Buy Now">
                    </form>
                </div>
            </div>
        </div>
    </body>


    </html>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
   
    <?php linkJS("customer/paymentForm"); ?>
</body>

</html>