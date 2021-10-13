<?php   $errors = $data['errors'];?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("forgetPassword"); ?>
    <?php linkCSS("navigation"); ?>
    <title>Forget Password</title>
</head>

<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>

    
    <div class="form-container">
        <form method="post" action="<?php echo BASEURL.'/forgetPassword';?>" class="login" id="sendForm">
            <div class="container">
                <div class="header">Reset Your Password</span></div>
                <div class="fieldset">
                    <label for="pin" class="label">Enter Your Email To Get Account Password Resetting Information
                    </label>
                    <input type="email" placeholder="Email" name="email" id="email" onfocusout="validateEmail()">
                    <div class="error" id="error" ><?php echo $errors["email"];?></div>
                </div>
                <div class="fieldset">
                    <input type="submit" class="registerbtn" value="Send Password Reset Information">
                </div>
            </div>
        </form>

    </div>

    
    


<?php linkJS("forgetPassword"); ?>
<script src="https://kit.fontawesome.com/3220c9480a.js" crossorigin="anonymous"></script>
</body>

</html>