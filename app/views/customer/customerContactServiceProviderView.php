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
            <a href="#" id="epl">
                <i class="fas fa-user-tie" ></i>
              <span class="links_name" id="ep">Event Planners</span>
            </a>
          </li>
          <li>
            <a href="#" id="venu">
              <i class="fas fa-hotel" ></i>
              <span class="links_name" id="venue"> Venues & Halls</span>
            </a>
          </li>
        <li>
          <a href="#" id="cat">
            <i class="fas fa-utensils" ></i>
            <span class="links_name" id="catering">Catering Service</span>
          </a>
        </li>
        <li>
          <a href="#" id="phot">
            <i class="fas fa-camera" ></i>
            <span class="links_name" id="photo">Photographers</span>
          </a>
        </li>
        
        <li>
          <a href="#" id="musi">
            <i class="fas fa-guitar" ></i>
            <span class="links_name" id="music">Musical Service</span>
          </a>
        </li>
        <li>
          <a href="#" id="danc">
            <i class="fas fa-child" ></i>
            <span class="links_name" id="dance">Dancing Groups</span>
          </a>
        </li>
        <li>
          <a href="#" id="salo">
            <i class="fas fa-building" ></i>
            <span class="links_name" id="salon">Salon</span>
          </a>
        </li>
        <li>
          <a href="#" id="caku">
            <i class="fas fa-birthday-cake" ></i>
            <span class="links_name" id="cake">Cake & Sweet</span>
          </a>
        </li>
        <li>
          <a href="#" id="decor">
            <i class="fas fa-holly-berry" ></i>
            <span class="links_name" id="deco">Decorations</span>
          </a>
        </li>
        <li>
            <a href="#" id="soun">
                <i class="fas fa-microphone" ></i>
              <span class="links_name" id="sound">Sounds & Lightings</span>
            </a>
        </li>
        <li>
            <a href="#" id="dres">
                <i class="fas fa-female" ></i>
              <span class="links_name" id="dress">Dress Suppliers</span>
            </a>
          </li>
      </ul>
    </div>
  </div>
<!-- 
  <div class="cusContent" id="con"> 
      <p><h2>Hello  Friends,</h2><br> <h3>Let’s start finding service providers.<br><br></h3></p>

      <div class="cusDetail">
      <img <?php srcIMG("riding.png") ?> alt="Chance Flowers">
      </div>

  </div>  -->


   <div class="cusContent" id="con">

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
            <td> <a  href="#"> <img <?php srcIMG("chanceFlowers.png") ?> alt="Chance Flowers"></a><br><p>2nd Chance Flowers <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="<?php echo BASEURL . '/venuesANDhalls'; ?>"><img <?php srcIMG("hotel/hotel1.jpg") ?> alt="Chance Flowers"></a><br><p>Mount Lavinia Hotel <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("bakeriya.jpg") ?> alt="Chance Flowers"></a> <br><p>APE BAKERIYA <br>Galle, Sri Lanka</p></td>   
          </tr>

          <tr>
            <td> <a  href="#"> <img <?php srcIMG("ashane.jpg") ?> alt="Chance Flowers"></a><br><p>Ashane Gunarathne <br>Malabe, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("dark.jpg") ?> alt="Chance Flowers"> </a><br><p>Dark Shine <br> Mathara, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("dukes.png") ?> alt="Chance Flowers"> </a><br><p>Dukes Court 1 <br>Katunayaka,Sri Lanka</p></td>  
          </tr>
          
        </table>
      </div>
  
    </div>

  </div>

  <div class="epContent" id=popup-0>
    <form action="#" class="form-area" method="POST">
      <div class="eventq">
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

        
       <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
       </div>
      
      </div>
    </form>

    <div class="ecusDetail">
      <div class="ecusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("brought.jpg") ?> alt="Chance Flowers"></a><br><p>Broghts Event Production <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("shero.jpg") ?> alt="Chance Flowers"> </a><br><p>Event By Shero <br>Colombo, Sri Lanaka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("eventers.jpg") ?> alt="Chance Flowers"> </a><br><p>Wedding Planner <br>Katunayaka,Sri Lanka</p></td>  
          </tr>

          <tr>
            <td> <a  href="#"> <img <?php srcIMG("eventShy.png") ?> alt="Chance Flowers"></a><br><p>IEM<br>Kandy,Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("IEM.png") ?> alt="Chance Flowers"></a> <br><p>EventShy<br>Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("dream.png") ?> alt="Chance Flowers"></a><br><p>Dream Planners<br>Kaluthara, Sri Lanka</p></td>  
          </tr>

        </table>
      </div>
  
    </div>
      
  </div>

  <div class="venueContent" id=popup-1>
     
    <form action="#" class="form-area" method="POST">

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
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["indoor"] ?></div> -->
          </div>

          <div class="outdoort">
            <input placeholder="Outdoor Venue" name="outdoor">
          </div>
          
          <div class="outdoortick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["outdoor"] ?></div> -->
          </div>
          
  
        </div>

        <p2>Addtional Features</p2>

        <div class="input-box5">
          <div class="dancet">
            <input placeholder="Dancing Floor" name="dancing">
          </div>
          
          <div class="dancetick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["dancing"] ?></div> -->
          </div>

        </div>

        <div class="input-box6">
          <div class="setit">
            <input  placeholder="Seti Back" name="seti">
          </div>

          <div class="setitick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["seti"] ?></div> -->
          </div>

          <div class="poruwat">
            <input  placeholder="Poruwa" name="poruwa">
          </div>

          <div class="poruwatick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["poruwa"] ?></div> -->
          </div>
          
        </div>


       <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
       </div>

      </div>
    </form>


    <div class="vcusDetail">
      <div class="vcusraw1">
        <table>
          <tr>
            <td> <a href="<?php echo BASEURL . '/venuesANDhalls'; ?>"><img <?php srcIMG("hotel/hotel1.jpg") ?> alt="Chance Flowers"></a><br><p>Mount Lavinia Hotel <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("modernbanquet.jpg") ?> alt="Chance Flowers"></a><br><p>Modern Banquet Hotel <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("dukes.png") ?> alt="Chance Flowers"> </a><br><p>Dukes Court 1 <br>Katunayaka,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>

  <div class="cateringContent" id=popup-2>
    <form action="#" class="form-area" method="POST">

      <div class="cateringq">

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

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>
       

      </div>
    </form>
    <div class="ccusDetail">
      <div class="ccusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("cate.png") ?> alt="Chance Flowers"></a><br><p>Dushan Catering <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("jayamalpng.png") ?> alt="Chance Flowers"></a> <br><p>Jayamal Caterers <br> Galle, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("papscate.jpg") ?> alt="Chance Flowers"> </a><br><p>Paps Catering <br>Kandy,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>

  <div class="photoContent" id=popup-3>
    <form action="#" class="form-area" method="POST">

  
      <div class="photoq">
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

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>
       

      </div>
    </form>

    <div class="pcusDetail">
      <div class="pcusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("pob.jpg") ?> alt="Chance Flowers"></a><br><p>OB Sudio <br> Galle, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("pOminro.jpg") ?> alt="Chance Flowers"></a> <br><p>Ominro <br> Gampaha, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("pDarkeye.jpg") ?> alt="Chance Flowers"> </a><br><p>DARKEYE <br>Kaluthara,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>

  
  <div class="musicContent" id=popup-4>
    <form action="#" class="form-area" method="POST">

      <div class="musicq">

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
        
        <p3>Require Services</p3>
        <div class="input-box33">
          <div class="mbandt">
            <input placeholder="Music Band" name="mband">
          </div>
          
          <div class="mbandtick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["mband"] ?></div> -->
          </div>

          <div class="djst">
            <input placeholder="Djs" name="djs">
          </div>
          
          <div class="djstick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["djs"] ?></div> -->
          </div>
        </div>

        <div class="input-box34">
          <div class="solot">
            <input placeholder="Solo Singer" name="solo">
          </div>
          
          <div class="solotick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["solo"] ?></div> -->
          </div>
         
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>
       

      </div>
    </form>
    <div class="mcusDetail">
      <div class="mcusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("ashane.jpg") ?> alt="Chance Flowers"></a><br><p>Ashane Gunarathne <br>Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("Wavemusic.jpg") ?> alt="Chance Flowers"> </a><br><p>Waves<br> Mathara, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("DjAzthu.jpg") ?> alt="Chance Flowers"> </a><br><p>DJ Azthu <br>Kegalle,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>

 
  <div class="danceContent" id=popup-5>
    <form action="#" class="form-area" method="POST">

      <div class="danceq">

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

        <p>Require Dancing Type</p>

        <div class="input-box43">
          <div class="kandyt">
            <input placeholder="Kandyan Dancer" name="kandy">
          </div>
          
          <div class="kandytick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["kandy"] ?></div> -->
          </div>

          <div class="lawt">
            <input placeholder="Law Country Dancer" name="law">
          </div>
          
          <div class="lawtick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["law"] ?></div> -->
          </div>

        </div>

        <div class="input-box44">
          <div class="sabat">
            <input placeholder="Sabaragamuwa Dancer" name="saba">
          </div>
          
          <div class="sabatick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["saba"] ?></div> -->
          </div>

          <div class="west">
            <input placeholder="Western Dancer" name="wes">
          </div>
          
          <div class="westick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["wes"] ?></div> -->
          </div>
          
        </div>


        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>
       

      </div>
    </form>

    <div class="dcusDetail">
      <div class="dcusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("sasha.jpg") ?> alt="Chance Flowers"></a><br><p>Sasha Group <br> Kandy, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("dark.jpg") ?> alt="Chance Flowers"> </a><br><p>Dark Shine <br> Mathara, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("Tharanga.jpg") ?> alt="Chance Flowers"></a> <br><p>Tharanga Dancers<br>Colombo,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>


  <div class="salonContent" id=popup-6>
    <form action="#" class="form-area" method="POST">

      <div class="salonq">
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

        <div class="input-box53">
          <select name="gender" placeholder="Gender">
          <option value="null">Salon Type</option>
          <option value="male">Salon for males</option>
          <option value="female">Salon for females</option>
          <option value="female">Salon for both types</option>
          </select>
          <!-- <div class="error"><?php echo $errors["gender"] ?></div> -->
        </div>

       

        <!-- <div class="input-box55">
          <input type="text" placeholder="Salon Type" name="salonT">
          <div class="error"><?php echo $errors["salonT"] ?></div>
        </div> -->

        
    
        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>
       

      </div>
    </form>

    <div class="scusDetail">
      <div class="scusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("sicssors.png") ?> alt="Chance Flowers"></a><br><p>Scissor Salon <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("sjaal.png") ?> alt="Chance Flowers"></a><br><p>Jaal Salon <br> Anuradhapura, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("Smosh.jpg") ?> alt="Chance Flowers"></a> <br><p>Smosh <br>Galle,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>


  
  <div class="cakeContent" id=popup-7>
    <form action="#" class="form-area" method="POST">

      <div class="cakeq">
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

        <p4>Cake Type</p4> 

        <div class="input-box64">
          <div class="wedt">
            <input placeholder="Wedding Cake" name="wed">
          </div>
          
          <div class="wedtick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["wed"] ?></div> -->
          </div>

          <div class="partyt">
            <input placeholder="Party Cake" name="party">
          </div>
          
          <div class="partytick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["party"] ?></div> -->
          </div>
      
        </div>

        <div class="input-box65">
          <div class="sweet">
            <input placeholder="Sweets" name="sweets">
          </div>
          
          <div class="sweetick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["sweets"] ?></div> -->
          </div>
      
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>

      </div>
    </form>

    <div class="cacusDetail">
      <div class="cacusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("bakeriya.jpg") ?> alt="Chance Flowers"></a><br><p>APE BAKERIYA <br>Galle, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("cakelicious.jpg") ?> alt="Chance Flowers"> </a><br><p>Calelicious <br> Jaffna, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("rash.jpg") ?> alt="Chance Flowers"> </a><br><p>Rush bakers <br>Colombo,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>


  <div class="decoContent" id=popup-8>
    <form action="#" class="form-area" method="POST">

      <div class="decoq">
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

        <p5>Features</p5>

        <div class="input-box74">
          <div class="backt">
            <input placeholder="seti Back & Poruwa" name="back">
          </div>
          
          <div class="backtick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["back"] ?></div> -->
          </div>

          <div class="floralt">
            <input placeholder="Floral Arrangement" name="floral">
          </div>
          
          <div class="floraltick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["floral"] ?></div> -->
          </div>
    
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>

      </div>
    </form>

    <div class="decusDetail">
      <div class="decusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("chanceFlowers.png") ?> alt="Chance Flowers"></a><br><p>2nd Chance Flowers <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("setiback.png") ?> alt="Chance Flowers"> </a><br><p>Evntro<br> Nuwara Eliya, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("designer.jpg") ?> alt="Chance Flowers"></a> <br><p>Event Decos <br>Hambanthota,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>


  
  <div class="soundContent" id=popup-9>
    <form action="#" class="form-area" method="POST">

      <div class="soundq">

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

        <p6>Require Service</p6>

        <div class="input-box84">
          <div class="soundt">
            <input placeholder="Sound Service" name="sound">
          </div>
          
          <div class="soundtick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["sound"] ?></div> -->
          </div>

          <div class="light">
            <input placeholder="Lighting Service" name="light">
          </div>
          
          <div class="lightick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["light"] ?></div> -->
          </div>
    
        </div>

        <p7>Event Environment</p7>

        <div class="input-box85">
          <div class="int">
            <input placeholder="Indoor Event" name="in">
          </div>
          
          <div class="intick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["in"] ?></div> -->
          </div>

          <div class="out">
            <input placeholder="Outdoor Event" name="out">
          </div>
          
          <div class="outick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["out"] ?></div> -->
          </div>
    
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>

      </div>
    </form>

    <div class="lcusDetail">
      <div class="lcusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("light.png") ?> alt="Chance Flowers"></a><br><p>SNV Events<br>Nuwara Eliya, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("light&sounf.jpg") ?> alt="Chance Flowers"></a> <br><p>JBA <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("s&l.png") ?> alt="Chance Flowers"> </a><br><p>S & L <br>Hambanthota,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>

  </div>


  
  <div class="dressContent" id=popup-10>
    <form action="#" class="form-area" method="POST">

      <div class="dressq">
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

        <p8>Dress Type</p8>

        <div class="input-box94">
          <div class="malet">
            <input placeholder="Male Dress" name="male">
          </div>
          
          <div class="maletick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["male"] ?></div> -->
          </div>

          <div class="femalet">
            <input placeholder="Female Dress" name="female">
          </div>
          
          <div class="femaletick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["female"] ?></div> -->
          </div>
    
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Search</button>
        </div>

      </div>
    </form>

    <div class="dscusDetail">
      <div class="dscusraw1">
        <table>
          <tr>
            <td> <a  href="#"> <img <?php srcIMG("Rayman.png") ?> alt="Chance Flowers"></a><br><p>Rayman <br> Colombo, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("H&h.jpg") ?> alt="Chance Flowers"> </a><br><p>H & h Suppliers <br> Ampara, Sri Lanka</p></td>
            <td> <a  href="#"> <img <?php srcIMG("nb.png") ?> alt="Chance Flowers"></a> <br><p>NB Suppliers <br>Mathara,Sri Lanka</p></td>  
          </tr>
        </table>
      </div>
  
    </div>


  </div>
</div>

</body>
<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?>
<?php linkPhp("footer") ?>
</html>



