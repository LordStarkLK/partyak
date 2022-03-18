<?php $errors = $data['errors']; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Partyak Login Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php linkCSS("login"); ?>
    <?php linkCSS("navigation"); ?>


</head>

<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>
    <div class="login-form">

        <div class="container">
            <img class="home-blob" <?php srcIMG("home-blob.png") ?> alt="home blob">
            <div class="main">

                <div class="content">

                    <form action="<?php echo BASEURL . '/login/index'; ?>" method="POST" onsubmit="validateAll()">


                        <div class="input-div one" id="div-email">
                            <i class="fas fa-user" id="icon-email"></i>
                            <input type="text" placeholder=" Email *" class="input" name="email" id="email" onfocusout="validateEmail()" \*required*\>


                        </div>
                        <div class="helper-text" id="helper-email" style="color:red;"> <?php echo $errors['email']; ?> </div>

                        <div class="input-div two" id="div-password">
                            <i class="fas fa-lock" id="icon-password"></i>
                            <input type="password" placeholder="Password *" name="password" id="password" class="input" onfocusout="validateLoginPassword()" \*required*\>
                        </div>

                        <div class="helper-text" id="helper-password" style="color:red;"><?php echo $errors['password']; ?> </div>



                        <button name="submit" class="btn">Login</button>
                    </form>
                    <p class="account"><a href="<?php echo BASEURL . '/forgetPassword'; ?>"> Forgot Password</a></p>
                    <p class="account">Not a member? <a href="<?php echo BASEURL . '/home/signup'; ?>"> Register</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php linkJS("loginValidation") ?>
    <script src="https://kit.fontawesome.com/3220c9480a.js" crossorigin="anonymous"></script>

</body>

</html>