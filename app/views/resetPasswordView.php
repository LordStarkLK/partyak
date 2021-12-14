<?php $errors = $data['errors']?>
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
    <form method="POST" action="<?php echo BASEURL.'/forgetPassword/changePassword';?>" class="login" id="submit" onsubmit="validateAll()">
        <div class="container">
            <div class="header">Reset Passsword</span> </div>
            <div class="fieldset">
                <label for="password" class="label">New Password</label>
                <input type="password" placeholder="Enter Password" name = "password1" id="password1" onfocusout="validatePassword1()">
                <div class="error" id="error"><?php echo $errors["password1"]; ?></div>
                
            </div>
            <div class="fieldset">
                <label for="password" class="label">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name = "password2" id="password2" onfocusout="validatePassword2()">
                <div class="error" id="error"><?php echo $errors["password2"]; ?></div>
                
            </div>

             <div style="padding-bottom:20px"> <input type="submit" class="registerbtn" value="Reset" name="reset" id="reset" ></div>
        </div>
    </form>

    </div>


    
    


<?php   linkJS("resetPassword") ?>

<script src="https://kit.fontawesome.com/3220c9480a.js" crossorigin="anonymous"></script>

</body>

</html>