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

  <div class="venueContent" id=popup-1>
     
    <form action="<?php echo BASEURL . '/customerContactServiceProvider/getVh'; ?>" class="form-area" method="POST">

      <div class="venueq">

      <div class="back" id="backb">
          <button type="submit" class="bac" value="Submit"><i class="fas fa-arrow-left"></i></button>
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

      <div class="seat">
            <select name="Seating" placeholder="Seating Arrangement">
                <option value="null">Seating Arrangement</option>
                <option value="banquet">Banquet</option>
                <option value="board">Board</option>
                <option value="classroom">Classroom</option>
                <option value="informal">Informal</option>
                <option value="ushape">U shape</option>
              </select>
              <!-- <div class="error"><?php echo $errors["seatingA"] ?></div> --> 
      </div>

        <p1>Venue Type</p1>

        <div class="input-box1" >
         
          <div class="indoort">
            <input placeholder="Indoor Venue" name="indoor">
          </div>
          
          <div class="indoortick">
            <input type="checkbox" placeholder="Agree" value="indoor" name="indoorAgree">
            <!-- <div class="error"><?php echo $errors["indoor"] ?></div> -->
          </div>

          <div class="outdoort">
            <input placeholder="Outdoor Venue" name="outdoor">
          </div>
          
          <div class="outdoortick">
            <input type="checkbox" placeholder="Agree" value="outdoor" name="outdoorAgree">
            <!-- <div class="error"><?php echo $errors["outdoor"] ?></div> -->
          </div>
          
  
        </div>

        <p2>Addtional Features</p2>

        <div class="input-box5">
          <div class="dancet">
            <input placeholder="Dancing Floor" name="dancing">
          </div>
          
          <div class="dancetick">
            <input type="checkbox" placeholder="Agree" value="dancingfloor" name="danceAgree">
            <!-- <div class="error"><?php echo $errors["dancing"] ?></div> -->
          </div>

        </div>

        <div class="input-box6">
          <div class="setit">
            <input  placeholder="Seti Back" name="seti">
          </div>

          <div class="setitick">
            <input type="checkbox" placeholder="Agree" value="setiback" name="setiAgree">
            <!-- <div class="error"><?php echo $errors["seti"] ?></div> -->
          </div>

          <div class="poruwat">
            <input  placeholder="Poruwa" name="poruwa">
          </div>

          <div class="poruwatick">
            <input type="checkbox" placeholder="Agree" value="poruwa" name="poruwaAgree">
            <!-- <div class="error"><?php echo $errors["poruwa"] ?></div> -->
          </div>
          
        </div>

       <div class="save" id="venueSu">
          <!-- <input type="hidden" value="venue" name="type"> -->
          <button type="submit" class="saveb" value="submit" name="submit">Search</button>
       </div>

      </div>
    </form>


    <div class="vcusDetail">
      <div class="vcusraw1">
        <table>
            <?php
                $i=1;

                    echo"<tr>";
                    $j=1;
                          
                            while($row=mysqli_fetch_assoc($data['venue_detail'])  ){
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
            ?>

          <!-- <tr>
            <td> <a href="<?php echo BASEURL . '/venuesANDhalls'; ?>"><img <?php srcIMG("hotel/hotel1.jpg") ?> alt="Chance Flowers"></a><br><p>Mount Lavinia Hotel <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("modernbanquet.jpg") ?> alt="Chance Flowers"></a><br><p>Modern Banquet Hotel <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("dukes.png") ?> alt="Chance Flowers"> </a><br><p>Dukes Court 1 <br>Katunayaka,Sri Lanka</p></td>  
          </tr> -->
        </table>
      </div>
  
    </div>

  </div>

</div>

</body>
<!-- <?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?> -->
<?php linkPhp("footer") ?>
</html>



