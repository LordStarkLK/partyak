<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Contact Event planner</title>
    <?php linkCSS("customer/customerContactEventPlannerView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="Customer.browse.SearchVendor.css"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<header>
    <?php linkPhp("customerNavigation") ?>

    </header>
<div class="container">
  <p> Event Planners </p>
</div>

  <div class="cusContent">

    <div class="cusDetail">
      <div class="cusraw1">
        <div class="cusGallery1">
          <a  href="#">
          <img <?php srcIMG("brought.jpg") ?> alt="Chance Flowers">
          </a>
          <div class="cusDes1">Broghts Event Production <br> Colombo, Sri Lanka</div>
        </div>
  
        <div class="cusGallery2">
          <a  href="<?php echo BASEURL . '/eventPlanner'; ?>">
          <img <?php srcIMG("nekatha.jpg") ?> alt="Chance Flowers">
          </a>
          <div class="cusDes2">Nekatha <br>Colombo, Sri Lanaka</div>
        </div>
  
        <div class="cusGallery3">
          <a  href="#">
          <img <?php srcIMG("eventers.jpg") ?> alt="Chance Flowers">
          </a><div class="cusDes3">Eventers <br>Galle, Sri Lanka</div>
        </div>  

        <div class="cusGallery4">
          <a  href="#">
          <img <?php srcIMG("weddingp.png") ?> alt="Chance Flowers">
          </a><div class="cusDes3">Wedding Planner <br>Katunayaka,Sri Lanka</div>
        </div>  

      </div>

      <div class="cusraw2">
        <div class="cusGallery5">
          <a  href="#">
          <img <?php srcIMG("IEM.png") ?> alt="Chance Flowers">
          </a>
          <div class="cusDes4">IEM<br>Kandy,Sri Lanka</div>
        </div>
  
        <div class="cusGallery6">
          <a  href="#">
          <img <?php srcIMG("eventShy.png") ?> alt="Chance Flowers">
          </a>
          <div class="cusDes5">EventShy<br>Colombo, Sri Lanka</div>
        </div>
  
        <div class="cusGallery7">
          <a  href="#">
          <img <?php srcIMG("89con.png") ?> alt="Chance Flowers">
          </a>
          <div class="cusDes3">89 CONCEPT<br>Mathara, Sri Lanka</div>
        </div>

        <div class="cusGallery8">
          <a  href="#">
          <img <?php srcIMG("dream.png") ?> alt="Chance Flowers">
          </a>
          <div class="cusDes3">Dream Planners<br>Kaluthara, Sri Lanka</div>
        </div>
  
      </div>

      </div>
      

  </div>


<?php linkJS("customer/customerSearchVendor"); ?>

<?php linkPhp("footer") ?>
</body>

</html>