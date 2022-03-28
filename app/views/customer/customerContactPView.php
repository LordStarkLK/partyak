<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Browse</title>
    <!-- <?php linkCSS("adminHomeView"); ?> -->
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php linkCSS("customer/customerContactServiceProviderView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <!-- <?php $serviceI=$data['service_detail'];?>
    <?php $serviceI=$data['ep_detail'];?>
    <?php $venueI=$data['venue_detail'];?>
    <?php $serviceI=$data['cate_detail'];?>
    <?php $serviceI=$data['photo_detail'];?>
    <?php $serviceI=$data['music_detail'];?>
    <?php $serviceI=$data['dance_detail'];?>
    <?php $serviceI=$data['salon_detail'];?>
    <?php $serviceI=$data['cake_detail'];?>
    <?php $serviceI=$data['deco_detail'];?>
    <?php $serviceI=$data['sound_detail'];?>
    <?php $serviceI=$data['dress_detail'];?> -->
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
              <a href="<?php echo BASEURL . '/customerContactServiceProvider/getEp'; ?>" id="epl">
                  <i class="fas fa-user-tie" ></i>
                <span class="links_name" id="ep">Event Planners</span>
              </a>
            </li>
            <li>
              <a href="<?php echo BASEURL . '/customerContactServiceProvider/getVh'; ?>" id="venu">
                <i class="fas fa-hotel" ></i>
                <span class="links_name" id="venue"> Venues & Halls</span>
              </a>
            </li>
          <li>
            <a href="<?php echo BASEURL . '/customerContactServiceProvider/getCate'; ?>" id="cat">
              <i class="fas fa-utensils" ></i>
              <span class="links_name" id="catering">Catering Service</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/customerContactServiceProvider/getPhoto'; ?>" id="phot">
              <i class="fas fa-camera" ></i>
              <span class="links_name" id="photo">Photographers</span>
            </a>
          </li>
          
          <li>
            <a href="<?php echo BASEURL . '/customerContactServiceProvider/getMusic'; ?>" id="musi">
              <i class="fas fa-guitar" ></i>
              <span class="links_name" id="music">Musical Service</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/customerContactServiceProvider/getDance'; ?>" id="danc">
              <i class="fas fa-child" ></i>
              <span class="links_name" id="dance">Dancing Groups</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/customerContactServiceProvider/getSalon'; ?>" id="salo">
              <i class="fas fa-building" ></i>
              <span class="links_name" id="salon">Salon</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/customerContactServiceProvider/getCakeDetails'; ?>" id="caku">
              <i class="fas fa-birthday-cake" ></i>
              <span class="links_name" id="cake">Cake & Sweet</span>
            </a>
          </li>
          <li>
            <a href="<?php echo BASEURL . '/customerContactServiceProvider/getDeco'; ?>" id="decor">
              <i class="fas fa-holly-berry" ></i>
              <span class="links_name" id="deco">Decorations</span>
            </a>
          </li>
          <li>
              <a href="<?php echo BASEURL . '/customerContactServiceProvider/getSound'; ?>" id="soun">
                  <i class="fas fa-microphone" ></i>
                <span class="links_name" id="sound">Sounds & Lightings</span>
              </a>
          </li>
          <li>
              <a href="<?php echo BASEURL . '/customerContactServiceProvider/getDress'; ?>" id="dres">
                  <i class="fas fa-female" ></i>
                <span class="links_name" id="dress">Dress Suppliers</span>
              </a>
            </li>
        </ul>
      </div>
    </div>


  <div class="photoContent" id=popup-3>
    <form action="<?php echo BASEURL . '/customerContactServiceProvider/getPhoto'; ?>" class="form-area" method="POST">

  
      <div class="photoq">
        <div class="back" id="backb">
          <button type="button" class="bac" value="Submit"><a href ="<?php echo BASEURL . '/customerContactServiceProvider'; ?>"><i class="fas fa-arrow-left"></i> </a></button>
        </div>

        <div class="input-box3">
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
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>
       

      </div>
    </form>

    <div class="pcusDetail">
      <div class="pcusraw1">
        <table>

          <?php
                      $i=1;
                    
                    
                      
                      
                          echo"<tr>";
                          $j=1;
                                
                                  while($row=mysqli_fetch_assoc($data['photo_detail'])  ){
                                    if($row['status']== "accepted"){
                                      echo "<td>";
                                      if($row['service_image']){
                                        echo "<a href=\" ".BASEURL ."/spService/index/$row[service_id]\"> <img src='http://localhost/partyak/public/img/serviceImages/$row[service_image]'/> </a>";
                                      }else{
                                        $row['service_image']="default.png";
                                        echo "<a href=\" ".BASEURL ."/spService/index/$row[service_id]\"> <img src='http://localhost/partyak/public/img/serviceImages/$row[service_image]'/> </a>";
                                      }
                                      echo " <br><p>$row[service_name]<br>$row[service_location], Sri Lanka</p>";
                                      echo "</td>"; 
                                    
                                      $j++;
                                      if($j>3){
                                        echo "</tr>";
                                        $j = 1;
                                      }

                                    }
                                    
                                    
                                  }
          ?>


          <tr>
            <td> <a  href="#"> <img <?php srcIMG("pob.jpg") ?> alt="Chance Flowers"></a><br><p>OB Sudio <br> Galle, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("pOminro.jpg") ?> alt="Chance Flowers"></a> <br><p>Ominro <br> Gampaha, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("pDarkeye.jpg") ?> alt="Chance Flowers"> </a><br><p>DARKEYE <br>Kaluthara,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>


</div>
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

</body>
<!-- Notification adding -->


<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?>
<?php linkPhp("footer") ?>
</html>



