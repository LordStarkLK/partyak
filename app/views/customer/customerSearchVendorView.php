<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <?php linkCSS("customer/customerSearchVendor"); ?>
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
  <div class="side">
  <div class="sidebar">
      <ul class="sidenav-links">
        <li>
            <a href="#">
                <i class="fas fa-user-tie" ></i>
              <span class="links_name">Event Planners</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-hotel" ></i>
              <span class="links_name">Venues & Halls</span>
            </a>
          </li>
        <li>
          <a href="#">
            <i class="fas fa-utensils" ></i>
            <span class="links_name">Catering Service</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-camera" ></i>
            <span class="links_name">Photographers</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class="fas fa-guitar" ></i>
            <span class="links_name">Musical Service</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-child" ></i>
            <span class="links_name">Dancing Groups</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-building" ></i>
            <span class="links_name">Saloon</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-birthday-cake" ></i>
            <span class="links_name">Cake & Sweet</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-holly-berry" ></i>
            <span class="links_name">Decorations</span>
          </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-microphone" ></i>
              <span class="links_name">Sounds & Lightings</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-female" ></i>
              <span class="links_name">Dress Suppliers</span>
            </a>
          </li>
      </ul>
  </div>
  </div>

  <div class="cusContent">

    <div class="cusSearch">
      <form class="cuse" action="#" method="POST">
        <input type="text" name="search">
        <button class="cusbtn" type="submit"><i class="fa fa-search"></i>Search</button>
      </form>
    </div>

    
    <div class="cusDetail">
      <div class="cusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("chanceFlowers.png") ?> alt="Chance Flowers"><br><p>2nd Chance Flowers <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("degrees.png") ?> alt="Chance Flowers"> <br><p>8 Degrees Hotel <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("bakeriya.jpg") ?> alt="Chance Flowers"> <br><p>APE BAKERIYA <br>Galle, Sri Lanka</p></td>  
          </tr>

          <tr>
            <td> <a  href="#"> <img <?php srcIMG("ashane.jpg") ?> alt="Chance Flowers"><br><p>Ashane Gunarathne <br>Malabe, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("dark.jpg") ?> alt="Chance Flowers"> <br><p>Dark Shine <br> Mathara, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("dukes.png") ?> alt="Chance Flowers"> <br><p>Dukes Court 1 <br>Katunayaka,Sri Lanka</p></td>  
          </tr>
          
        </table>
      </div>
  
    </div>

  </div>

  
</div>

<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?>
<?php linkPhp("footer") ?>


</body>

</html>