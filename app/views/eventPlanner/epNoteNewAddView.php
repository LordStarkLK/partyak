<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("navigation"); ?>
  <?php linkCSS("vendor/spReview"); ?>
  <?php linkCSS("eventPlanner/epNewNoteAdd"); ?>
  <?php linkCSS("footer");?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $booking_id = $data['booking_id'];?>
</head>

<body>
  <header>
    <?php linkPhp("navigation") ?>
  </header>
  <div class="container">
    <section class="home-section">
   <button id="backBtnId" onclick="history.go(-2);">Back</button>
    <h1 id="mainTitle">Add Note</h1>
      <div class="home-content">
              <form action="<?php echo BASEURL . '/epNoteNewAdd/insertNote'; ?>" class="form-area" method="POST"> 
              <select name="recmndSerName" id="recmndSerName" placeholder="Select Service Type" value="Select Service Type">
                 <option value="slctSerType">Select Servie Type</option>   
                 <option value="venNhalls">Venues & Halls</option>
                 <option value="CatSer">Catering Service</option>
                 <option value="phot">Photographers</option>
                 <option value="mucSer">Musical Service</option>
                 <option value="DncGrp">Dancing Groups</option>
                 <option value="sln">Saloon</option>
                 <option value="ckeSwt">Cake & Sweet</option>
                 <option value="deco">Decoration</option>
                 <option value="sndLight">Sounds & Lightings</option>
                 <option value="DrsSupp">Dress Suppliers</option>
              </select><br>
              <input type="text" name="service-name" placeholder="Recommanded Service Name"><br>
              <input type="text" name="AdvPayAmnt" placeholder="Advanced Payment Amount in Rs."><br>
              <input type="text" name="fulPaymnt" placeholder="Full Payment Amount in Rs."><br>
              <select name="pymntSts" id="pymntSts" placeholder="Payment Status">
                 <option value="notPaid">Not paid</option>
                 <option value="advPaid">Advance Paid</option>
                 <option value="fulPaid">Full Paid</option>
              </select><br>
              <input type="text" name="OthrSugst" placeholder="Other Suggestions"><br>
              <input type="hidden" name="bookingId" value="<?php echo $booking_id ?>">
              <input type="hidden" name="planningId" value="<?php echo $data['$planning_id'] ?>">
              <button type="submit" id="submitBtn">Submit</button>
              </form>
            </div>
    </section>
  </div>
   <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

  <?php linkJS("vendor/spReview"); ?>
  <?php if($data['status']==1){ linkJS("eventPlanner/epNoteSuccessfullyAdded");} ?>
  <?php linkPhp("footer") ?>
</body>

</html>