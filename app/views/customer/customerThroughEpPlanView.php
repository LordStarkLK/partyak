<?php $errors = $data['errors'] ?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Through Event Planner Planning</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("customer/customerThroughEpPlan"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <?php $row=$data['eventDetail'];?>
   </head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>
<div class="container">
  <div class="side">
    <div class="sidebar">
        <div class="sideDe">
          <p>After giving event details successfully, you can add service details which are required for your event. Then you can contact Event Planner.</p>
        </div> 

        <br><br><img <?php srcIMG("serviceE.png") ?> alt="Chance Flowers"> 
    </div>
  </div>

  <div class="cusContent" id="con"> 
  <form action="<?php echo BASEURL . '/customerThroughEpPlan/index'; ?>" class="form-area" method="POST">
          <p11>Event Details</p11>
          <div class="input-box01">
            <select name="eventType" placeholder="Event Type">
                <option value="null">Event Type</option>
                <option value="Wedding">Wedding</option>
                <option value="Party/Festival">Party/Festival</option>
                <option value="Corparate Event">Corporate Event</option>
                <option value="Personalize Event">Personalize Event</option>
            </select>
            <div class="error"><?php echo $errors["eventType"] ?></div>
          </div>
              
          <div class="input-box02">
              <input type="text" placeholder="Event Name" name="eventname">
              <div class="error"><?php echo $errors["eventname"] ?></div> 
          </div>

          <div class="input-box03">
            <div class="da">
                <div class="begin">
                  <p15><br>Event Date</p15>
                </div>

                <!-- <div class="stop">
                  <p16><br>Event End Date</p1>
                </div> -->

            </div>

            <div class="dates">
               <div class="bdate">
                <input type="date" placeholder="Event Start Date" name="startdate" >
                <div class="error"><?php echo $errors["startdate"] ?></div> 
              </div>

              <div class="arrow">
                <p>to</p>
              </div>

              
              <div class="sdate">
                <input type="date" placeholder="Event End Date" name="enddate">
                <!-- <div class="error"><?php echo $errors["enddate"] ?></div>  -->
              </div>

            </div>
                  
          </div>

          <div class="input-box04">
          <select name="city">
              <option value="null">City</option>
              <option value="Colombo">Colombo</option>
              <option value="Gampaha">Gampaha</option>
              <option value="Kaluthara">Kaluthara</option>
              <option value="Galle">Galle</option>
              <option value="Mathara">Mathara</option>
              <option value="Hambanthota">Hambanthota</option>
              <option value="Rathnapura">Rathnapura</option>
              <option value="Kegalle">Kegalle</option>
              <option value="Kandy">Kandy</option>
              <option value="Nuwara Eliya">Nuwara Eliya</option>
              <option value="Matale">Matale</option>
              <option value="Kurunegala">Kurunegala</option>
              <option value="Puttalam">Puttalam</option>
              <option value="Badulla">Badulla</option>
              <option value="Monaragala">Monaragala</option>
              <option value="Batticaloa">Batticaloa</option>
              <option value="Trincomalee">Trincomalee</option>
              <option value="Ampara">Ampara</option>
              <option value="Anuradapura">Anuradapura</option>
              <option value="Polonnaruwa">Polonnaruwa</option>
              <option value="Vavuniya">Vavuniya</option>
              <option value="Kilinochchi">Kilinochchi</option>
              <option value="Jaffna">Jaffna</option>
              <option value="Mannar">Mannar</option>
              <option value="Mullathivu">Mullathivu</option>
          </select>
          <div class="error"><?php echo $errors["city"] ?></div> 
          </div>

          <div class="input-box05">
              <input type="text" placeholder="no of Guests" name="noofguest">
              <div class="error"><?php echo $errors["noofguest"] ?></div> 
          </div>

          <div class="save">
            <button type="submit" name="submit" class="saveb" value="Submit">Submit</button>
          </div> 

    </form>

    <!-- Successful submit -->
    <?php
      if (isset($_POST['submit'])) {
        echo "<div class=\"sccuess-event\" onclick=\"document.getElementById($row[planning_id]).style.display='block'\"></div>
              <div id=\"id\" class=\"modal\">
                  <form class=\"modal-content\" action=\"/action_page.php\">
                    <div class=\"container-modal\">
                      <h1>Success!</h1>
                      <br><p>Your event details successfully submitted.</p>
                      <br><p>Now you should add your service details which are requied for you.</p>
                          
                      <div class=\"clearfix\">
                        <button type=\"button\" class=\"deletebtn\" onclick=\"window.location=' " . BASEURL . "/customerThroughEpPlanS'\">OK</button>
                      </div>
                    </div>
                  </form>
              </div>";
      }
    ?>
  </div> 
  
</div>

<!-- Notification adding -->
<?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>

</body>
<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerOnYourOwnPlan"); ?>
<?php linkPhp("footer") ?>
</html>



