<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>On Your Own Planning Service Details</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php linkCSS("customer/customerOnYourOwnSView"); ?>
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
    
      <ul class="sidenav-links">
          <li>
            <a href="#"  id="ve">
              <i class="fas fa-hotel" ></i>
              <span class="links_name" > Venues & Halls</span>
            </a>
          </li>
        <li>
          <a href="#"  id="ca">
            <i class="fas fa-utensils" ></i>
            <span class="links_name" >Catering Service</span>
          </a>
        </li>
        <li>
          <a href="#" id="ph">
            <i class="fas fa-camera" ></i>
            <span class="links_name" >Photographers</span>
          </a>
        </li>
        
        <li>
          <a href="#" id="mu">
            <i class="fas fa-guitar" ></i>
            <span class="links_name" >Musical Service</span>
          </a>
        </li>
        <li>
          <a href="#" id= "da">
            <i class="fas fa-child" ></i>
            <span class="links_name" >Dancing Groups</span>
          </a>
        </li>
        <li>
          <a href="#" id="sa">
            <i class="fas fa-building" ></i>
            <span class="links_name" >Saloon</span>
          </a>
        </li>
        <li>
          <a href="#" id="cak">
            <i class="fas fa-birthday-cake" ></i>
            <span class="links_name" >Cake & Sweet</span>
          </a>
        </li>
        <li>
          <a href="#" id="dec">
            <i class="fas fa-holly-berry" ></i>
            <span class="links_name" >Decorations</span>
          </a>
        </li>
        <li>
            <a href="#" id="so">
                <i class="fas fa-microphone" ></i>
              <span class="links_name" >Sounds & Lightings</span>
            </a>
        </li>
        <li>
            <a href="#" id="dr">
                <i class="fas fa-female" ></i>
              <span class="links_name" >Dress Suppliers</span>
            </a>
          </li>
      </ul>
    </div>
  </div>

<form action="<?php echo BASEURL . '/customerOnYourOwnPlanS'; ?>" class="form-area" method="POST">
  <div class="venueContent" id=popup-1>

    <div class="venueq">

    <div class="back" id="backc">
            <button  class="bac" value="Submit"> <i class="fas fa-hotel" ></i>  Venues & Halls</button>
    </div>

      <div class="seat">
            <select name="Seating" placeholder="Seating Arrangement">
                <option value="no">Seating Arrangement</option>
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
            <input type="checkbox"  value="yes" name="indoorAgree">
            <!-- <div class="error"><?php echo $errors["indoor"] ?></div> -->
          </div>

          <div class="outdoort">
            <input placeholder="Outdoor Venue" name="outdoor">
          </div>
          
          <div class="outdoortick">
            <input type="checkbox" placeholder="Agree" value="yes" name="outdoorAgree">
            <!-- <div class="error"><?php echo $errors["outdoor"] ?></div> -->
          </div>
          
  
        </div>

        <p2>Addtional Features</p2>

        <div class="input-box5">
          <div class="dancet">
            <input placeholder="Dancing Floor" name="dancing">
          </div>
          
          <div class="dancetick">
            <input type="checkbox" placeholder="Agree" value="yes" name="danceAgree">
            <!-- <div class="error"><?php echo $errors["dancing"] ?></div> -->
          </div>

        </div>

        <div class="input-box6">
          <div class="setit">
            <input  placeholder="Seti Back" name="seti">
          </div>

          <div class="setitick">
            <input type="checkbox" placeholder="Agree" value="yes" name="setiAgree">
            <!-- <div class="error"><?php echo $errors["seti"] ?></div> -->
          </div>

          <div class="poruwat">
            <input  placeholder="Poruwa" name="poruwa">
          </div>

          <div class="poruwatick">
            <input type="checkbox" placeholder="Agree" value="yes" name="poruwaAgree">
            <!-- <div class="error"><?php echo $errors["poruwa"] ?></div> -->
          </div>
          
        </div>
      
      <!-- <div class="save">
          <button type="submit" class="saveb" id="venue" value="Submit">Submit<i class="fas fa-forward"></i></button>
      </div>  -->


    </div>


    <div class="cateringq">
        <div class="back" id="backc">
            <button  class="bac" value="Submit"><i class="fas fa-utensils" ></i>  Catering Service</button>
        </div>
        <br><p0>Meal Types & Addtional Features</p0>
        <div class="input-box15">
          <div class="breakt">
            <input  placeholder="Breakfast" name="breakfast">
          </div>

          <div class="breaktick">
            <input type="checkbox" placeholder="Agree" value="yes" name="breakfAgree">
            <!-- <div class="error"><?php echo $errors["breakfast"] ?></div> -->
          </div>

          <div class="luncht">
            <input  placeholder="Lunch" name="lunch">
          </div>

          <div class="lunchtick">
            <input type="checkbox" placeholder="Agree" value="yes" name="lunchAgree">
            <!-- <div class="error"><?php echo $errors["lunch"] ?></div> -->
          </div>

        </div>

        

        <div class="input-box16">
          <div class="dinnert">
            <input  placeholder="Dinner" name="dinner">
          </div>

          <div class="dinnertick">
            <input type="checkbox" placeholder="Agree" value="yes" name="dinnerAgree">
            <!-- <div class="error"><?php echo $errors["dinner"] ?></div> -->
          </div>

          <div class="teat">
            <input  placeholder="Tea Time" name="tea">
          </div>

          <div class="teatick">
            <input type="checkbox" placeholder="Agree" value="yes" name="teaAgree">
            <!-- <div class="error"><?php echo $errors["tea"] ?></div> -->
          </div>
          
        </div>

        <div class="input-box17">
          <div class="buffet">
            <input placeholder="Buffe" name="buffe">
          </div>
          
          <div class="buffetick">
            <input type="checkbox" placeholder="Agree" value="yes" name="buffeAgree">
            <!-- <div class="error"><?php echo $errors["buffe"] ?></div> -->
          </div>

          <div class="nos">
            <input type="text" placeholder="No of Servants Want" name="noServant">
            <!-- <div class="error"><?php echo $errors["noServvant"] ?></div> -->
          </div>
          
        </div>

        <!-- <div class="save">
          <button type="submit" class="saveb" id="catering" value="Save">Next <i class="fas fa-forward"></i></button>
        </div> -->
       

      </div>

      <div class="photoq">
        <div class="back" id="backp">
            <button type="button" class="bac" value="Submit"><i class="fas fa-camera" ></i>  Photographers</button>
        </div>
        <div class="input-box25">
          <input type="text" placeholder="Estimated Budget Range" name="budget">
          <!-- <div class="error"><?php echo $errors["budget"] ?></div> -->
        </div>
        <div class="input-box26">
          <input type="text" placeholder="Photo shoot details" name="photoDetails">
          <!-- <div class="error"><?php echo $errors["budget"] ?></div> -->
        </div>

        
        <!-- <div class="save">
          <button type="button" class="saveb" id="photo" value="Save">Next <i class="fas fa-forward"></i></button>
        </div> -->

      </div>


      <div class="musicq">
        <div class="back" id="backm">
          <button type="button" class="bac" value="Submit"><i class="fas fa-guitar" ></i>  Musical Service</button>
        </div>
      <p3>Require Services</p3>
        <div class="input-box33">
          <div class="mbandt">
            <input placeholder="Music Band" name="mband">
          </div>
          
          <div class="mbandtick">
            <input type="checkbox" placeholder="Agree" value="yes" name="mbandAgree">
            <!-- <div class="error"><?php echo $errors["mband"] ?></div> -->
          </div>

          <div class="djst">
            <input placeholder="Djs" name="djs">
          </div>
          
          <div class="djstick">
            <input type="checkbox" placeholder="Agree" value="yes" name="djAgree">
            <!-- <div class="error"><?php echo $errors["djs"] ?></div> -->
          </div>
        </div>

        <div class="input-box34">
          <div class="solot">
            <input placeholder="Solo Singer" name="solo">
          </div>
          
          <div class="solotick">
            <input type="checkbox" placeholder="Agree" value="yes" name="soloAgree">
            <!-- <div class="error"><?php echo $errors["solo"] ?></div> -->
          </div>
         
        </div>

        <!-- <div class="save">
          <button type="button" class="saveb"id="music" value="Submit">Next <i class="fas fa-forward"></i></button>
        </div>  -->
        

      </div>

      <div class="danceq">
        <div class="back" id="backd">
          <button type="button" class="bac" value="Submit"><i class="fas fa-child" ></i>  Dancing Groups</button>
        </div>
      <p>Require Dancing Type</p>
      <div class="input-box43">
          <div class="kandyt">
            <input placeholder="Kandyan Dancer" name="kandy">
          </div>
          
          <div class="kandytick">
            <input type="checkbox" placeholder="Agree" value="yes" name="kandyAgree">
            <!-- <div class="error"><?php echo $errors["kandy"] ?></div> -->
          </div>

          <div class="lawt">
            <input placeholder="Law Country Dancer" name="law">
          </div>
          
          <div class="lawtick">
            <input type="checkbox" placeholder="Agree" value="yes" name="lawAgree">
            <!-- <div class="error"><?php echo $errors["law"] ?></div> -->
          </div>

        </div>

        <div class="input-box44">
          <div class="sabat">
            <input placeholder="Sabaragamuwa Dancer" name="saba">
          </div>
          
          <div class="sabatick">
            <input type="checkbox" placeholder="Agree" value="yes" name="sabaAgree">
            <!-- <div class="error"><?php echo $errors["saba"] ?></div> -->
          </div>

          <div class="west">
            <input placeholder="Western Dancer" name="wes">
          </div>
          
          <div class="westick">
            <input type="checkbox" placeholder="Agree" value="yes" name="wesAgree">
            <!-- <div class="error"><?php echo $errors["wes"] ?></div> -->
          </div>
          
        </div>


        <!-- <div class="save">
          <button type="button" class="saveb"  id="dance" value="Submit">Next <i class="fas fa-forward"></i></button>
        </div> -->
       

      </div>

      <div class="salonq">
        <div class="back" id="backs">
          <button type="button" class="bac" value="Submit"><i class="fas fa-building" ></i>  Saloon</button>
        </div>
    
        <div class="input-box53">
          <select name="SalonType" placeholder="Gender">
          <option value="null">Salon Type</option>
          <option value="male">Salon for males</option>
          <option value="female">Salon for females</option>
          <option value="female">Salon for both types</option>
          </select>
          <!-- <div class="error"><?php echo $errors["gender"] ?></div> -->
        </div>

        <p17>Require Services</p17>

        <div class="input-box55">
          <div class="hairt">
            <input placeholder="Hair style" name="hair">
          </div>
          
          <div class="hairtick">
            <input type="checkbox" placeholder="Agree" value="yes" name="hairAgree ">
            <!-- <div class="error"><?php echo $errors["hair"] ?></div> -->
          </div>

          <div class="makeupt">
            <input placeholder="Make up" name="makeup">
          </div>
          
          <div class="makeuptick">
            <input type="checkbox" placeholder="Agree" value="yes" name="makeupAgree">
            <!-- <div class="error"><?php echo $errors["makeup"] ?></div> -->
          </div>
          
        </div>

        
        <div class="input-box56">
          <input type="text" placeholder="No of Dressers" name="dressers">
          <!-- <div class="error"><?php echo $errors["dressers"] ?></div> -->
        </div>


        <!--         
        <div class="save">
          <button type="button" class="saveb"  id="salon" value="Save">Next <i class="fas fa-forward"></i></button>
        </div> -->
       

      </div>


      <div class="cakeq">
        <div class="back" id="backca">
          <button type="button" class="bac" value="Submit"><i class="fas fa-birthday-cake" ></i> Cake & Sweet</button>
        </div>
      <p4>Cake Type</p4> 
      <div class="input-box64">
          <div class="wedt">
            <input placeholder="Wedding Cake" name="wed">
          </div>
          
          <div class="wedtick">
            <input type="checkbox" placeholder="Agree" value="yes" name="wedAgree">
            <!-- <div class="error"><?php echo $errors["wed"] ?></div> -->
          </div>

          <div class="partyt">
            <input placeholder="Party Cake" name="party">
          </div>
          
          <div class="partytick">
            <input type="checkbox" placeholder="Agree" value="yes" name="partyAgree">
            <!-- <div class="error"><?php echo $errors["party"] ?></div> -->
          </div>
      
        </div>

        <div class="input-box65">
          <div class="sweet">
            <input placeholder="Sweets" name="sweets">
          </div>
          
          <div class="sweetick">
            <input type="checkbox" placeholder="Agree" value="yes" name="sweetAgree">
            <!-- <div class="error"><?php echo $errors["sweets"] ?></div> -->
          </div>
      
        </div>

        <!-- <div class="save">
          <button type="button" class="saveb" id="cake" value="Submit">Next <i class="fas fa-forward"></i></button>
        </div> -->

      </div>

      <div class="decoq">
        <div class="back" id="backde">
          <button type="button" class="bac" value="Submit"><i class="fas fa-holly-berry" ></i>  Decorations</button>
        </div>
        <p5>Features</p5>
        
        <div class="input-box74">
          <div class="backt">
            <input placeholder="seti Back & Poruwa" name="back">
          </div>
          
          <div class="backtick">
            <input type="checkbox" placeholder="Agree" value="yes" name="sbackAgree">
            <!-- <div class="error"><?php echo $errors["back"] ?></div> -->
          </div>

          <div class="floralt">
            <input placeholder="Floral Arrangement" name="floral">
          </div>
          
          <div class="floraltick">
            <input type="checkbox" placeholder="Agree" value="yes" name="floralAgree">
            <!-- <div class="error"><?php echo $errors["floral"] ?></div> -->
          </div>
    
        </div>

        <!-- <div class="save">
          <button type="button" class="saveb" id="deco" value="Submit">Next <i class="fas fa-forward"></i></button>
        </div> -->

      </div>


      <div class="soundq">
        <div class="back" id="backsl">
          <button type="button" class="bac" value="Submit"><i class="fas fa-microphone" ></i>  Sounds & Lightings</button>
        </div>

       <p6>Require Service</p6>

        <div class="input-box84">
          <div class="soundt">
            <input placeholder="Sound Service" name="sound">
          </div>
          
          <div class="soundtick">
            <input type="checkbox" placeholder="Agree" value="yes" name="soundAgree">
            <!-- <div class="error"><?php echo $errors["sound"] ?></div> -->
          </div>

          <div class="light">
            <input placeholder="Lighting Service" name="light">
          </div>
          
          <div class="lightick">
            <input type="checkbox" placeholder="Agree" value="yes" name="lightAgree">
            <!-- <div class="error"><?php echo $errors["light"] ?></div> -->
          </div>
    
        </div>

        <p7>Event Environment</p7>

        <div class="input-box85">
          <div class="int">
            <input placeholder="Indoor Event" name="in">
          </div>
          
          <div class="intick">
            <input type="checkbox" placeholder="Agree" value="yes" name="indooreAgree">
            <!-- <div class="error"><?php echo $errors["in"] ?></div> -->
          </div>

          <div class="out">
            <input placeholder="Outdoor Event" name="out">
          </div>
          
          <div class="outick">
            <input type="checkbox" placeholder="Agree" value="yes" name="outdooreAgree">
            <!-- <div class="error"><?php echo $errors["out"] ?></div> -->
          </div>
    
        </div>

        <!-- <div class="save">
          <button type="button" class="saveb"  id="sound" value="Submit">Next <i class="fas fa-forward"></i></button>
        </div> -->

      </div>


      <div class="dressq">
        <div class="back" id="backdr">
          <button type="button" class="bac" value="Submit"><i class="fas fa-female" ></i> Dress Suppliers</button>
        </div>
        <p8>Dress Type</p8>
        <div class="input-box94">
          <div class="malet">
            <input placeholder="Male Dress" name="male">
          </div>
          
          <div class="maletick">
            <input type="checkbox" placeholder="Agree" value="yes" name="maleAgree">
            <!-- <div class="error"><?php echo $errors["male"] ?></div> -->
          </div>

          <div class="femalet">
            <input placeholder="Female Dress" name="female">
          </div>
          
          <div class="femaletick">
            <input type="checkbox" placeholder="Agree" value="yes" name="femaleAgree">
            <!-- <div class="error"><?php echo $errors["female"] ?></div> -->
          </div>
    
        </div>
      </div>


      <div class="save">
          <button type="Submit" name="submit" class="saveb"  value="Submit">Submit</button>
      </div>
 
  </div>



</form>

<!-- Successful submit -->
<?php
      if (isset($_POST['submit'])) {
        echo "<div class=\"sccuess-event\" onclick=\"document.getElementById($row[planning_id]).style.display='block'\"></div>
        hi
              <div id=\"$row[planning_id]\" class=\"modal\">
                <span onclick=\"document.getElementById($row[planning_id]).style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
                  <form class=\"modal-content\" action=\"/action_page.php\">
                    <div class=\"container-modal\">
                      <h1>Successfull</h1>
                      <br><br><p>Your event details successfully submitted.</p>
                        
                      <div class=\"clearfix\">
                        <button type=\"button\" class=\"deletebtn\" onclick=\"window.location=' " . BASEURL . "/customerMyEvent'\">OK</button>
                      </div>
                    </div>
                  </form>
              </div>";
      }
?>

  
</div>

</body>
<?php linkJS("customer/customerSearchVendor"); ?>
<!-- <?php linkJS("customer/customerOnYourOwnS"); ?> -->
<?php linkPhp("footer") ?>
</html>

