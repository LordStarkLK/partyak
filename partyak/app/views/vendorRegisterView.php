<!-- Get vaidation messages to a array -->
<?php $errors = $data['errors'] ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php linkCSS("navigation"); ?>
  <?php linkCSS("vendorRegister"); ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php linkPhp("navigation") ?>

  <div class="content">
    <form action="<?php echo BASEURL . '/vendorRegister/index'; ?>" class="form-area" method="POST">

      <div class="regImage">
        <img <?php srcIMG("vendor.png") ?> class="regImg" alt="pick vendor image">
      </div>

      <div class="user-details">
        <div class="name">
          <div class="input-box1">
            <input type="text" placeholder="First Name" name="fname">
            <div class="error"><?php echo $errors["fname"] ?></div>
          </div>
          <div class="input-box2">
            <input type="text" placeholder="Last Name" name="lname">
            <div class="error"><?php echo $errors["lname"] ?></div>
          </div>
        </div>

        <!-- <div class="input-box3">
          <input type="text" placeholder="Username" name="username">
          <div class="error"><?php echo $errors["username"] ?></div>
        </div> -->


        <select name="type">
          <option value="null">Select Type</option>
          <option value="event">Event Planner</option>
          <option value="service">Service Provider</option>
        </select>
        <div class="error"><?php echo $errors["type"] ?></div>


        <div class="input-box5">
          <input type="email" placeholder="Email" name="email">
          <div class="error"><?php echo $errors["email"] ?></div>
        </div>

        <div class="input-box6">
          <input type="password" placeholder="Password" name="password">
          <div class="error"><?php echo $errors["password"] ?></div>
        </div>

        <div class="input-box7">
          <input type="password" placeholder="Confirm password" name="confirmPassword">
          <div class="error"><?php echo $errors["confirmPassword"] ?></div>
        </div>

        <div class="agree">
          <div class="tick">
            <input type="checkbox" placeholder="Agree" name="agree">
          </div>
          <div class="agreement">
            <lable>I agree to the Terms & Conditions and Privacy Policy</lable>
            <div class="error"><?php echo $errors["agree"] ?></div>
          </div>
        </div>

        <div class="submit">
          <div class="button">
            <input type="submit" value="Register">
          </div>

          <div class="text">
            <lable>Already a member? <a href="#"> Login</a></lable>
          </div>
        </div>
    </form>
  </div>
  </div>
</body>

</html>