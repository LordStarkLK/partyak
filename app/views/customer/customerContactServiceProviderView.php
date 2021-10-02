<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
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
            <a href="#">
              <i class="fas fa-hotel" ></i>
              <span class="links_name" id="venue"> Venues & Halls</span>
            </a>
          </li>
        <li>
          <a href="#">
            <i class="fas fa-utensils" ></i>
            <span class="links_name" id="catering">Catering Service</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-camera" ></i>
            <span class="links_name" id="photo">Photographers</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class="fas fa-guitar" ></i>
            <span class="links_name" id="music">Musical Service</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-child" ></i>
            <span class="links_name" id="dance">Dancing Groups</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-building" ></i>
            <span class="links_name" id="salon">Saloon</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-birthday-cake" ></i>
            <span class="links_name" id="cake">Cake & Sweet</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-holly-berry" ></i>
            <span class="links_name" id="deco">Decorations</span>
          </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-microphone" ></i>
              <span class="links_name" id="sound">Sounds & Lightings</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-female" ></i>
              <span class="links_name" id="dress">Dress Suppliers</span>
            </a>
          </li>
      </ul>
    </div>
  </div>

  <div class="cusContent" id="con"> 
      <p><h2>Hello  Friends,</h2><br> <h3>Let’s start finding service providers.<br><br></h3></p>

      <div class="cusDetail">
      <img <?php srcIMG("riding.png") ?> alt="Chance Flowers">
      </div>

  </div> 

  <div class="venueContent" id=popup-1>
    <form action="#" class="form-area" method="POST">

      <div class="venueq">
    
        <div class="input-box1">
          <select name="venueType" placeholder="Venue Type">
          <option value="null">Venue Type</option>
          <option value="indoor">Indoor Venue</option>
          <option value="outdoor">Outdoor Venue</option>
          <option value="both">Both</option>
          </select>
        <!-- <div class="error"><?php echo $errors["venueType"] ?></div>  -->
        </div>

        <div class="input-box2">
          <input type="text" placeholder="No of Guests" name="noOfGuests">
          <!-- <div class="error"><?php echo $errors["noOfGuests"] ?></div> -->
        </div>

        <div class="input-box3">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box4">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box5">
          <input type="text" placeholder="Seating arrangements" name="seatingA">
          <!-- <div class="error"><?php echo $errors["seatingA"] ?></div> -->
        </div>

        <div class="input-box6">
          <div class="dancet">
            <input placeholder="Dancing Floor" name="dancing">
          </div>
          
          <div class="dancetick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["dancing"] ?></div> -->
          </div>
        </div>

        <div class="input-box7">
          <div class="setit">
            <input  placeholder="Seti Back" name="seti">
          </div>

          <div class="setitick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["seti"] ?></div> -->
          </div>
        </div>

        <div class="input-box8">
          <div class="poruwat">
            <input  placeholder="Poruwa" name="poruwa">
          </div>

          <div class="poruwatick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["poruwa"] ?></div> -->
          </div>
        </div>

        <div class="input-box9">
          <input type="text" placeholder="Estimated Budget Range" name="budget">
          <!-- <div class="error"><?php echo $errors["budget"] ?></div> -->
        </div>

       <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
       </div>

      </div>
    </form>

  </div>

  <div class="cateringContent" id=popup-2>
    <form action="#" class="form-area" method="POST">

      <div class="cateringq">
    
        <div class="input-box11">
          <select name="eventType" placeholder="Event Type">
          <option value="null">Event Type</option>
          <option value="wedding">Wedding</option>
          <option value="partyf">Party/Festival</option>
          <option value="corparate">Corporate event</option>
          <option value="other">Other</option>
          </select>
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box12">
          <input type="text" placeholder="No of Guests" name="noOfGuests">
          <!-- <div class="error"><?php echo $errors["noOfGuests"] ?></div> -->
        </div>

        <div class="input-box13">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box14">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box15">
          <select name="mealTime" placeholder="Meal Time">
          <option value="null">Meal Time</option>
          <option value="breakfast">Breakfast</option>
          <option value="lunch">Lunch</option>
          <option value="tea">Tea Time</option>
          <option value="dinner">Dinner</option>
          </select>
          <!-- <div class="error"><?php echo $errors["mealT"] ?></div> -->
        </div>

        <div class="input-box16">
          <div class="buffet">
            <input placeholder="Buffe" name="buffe">
          </div>
          
          <div class="buffetick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["buffe"] ?></div> -->
          </div>
        </div>

        <div class="input-box17">
          <input type="text" placeholder="No of Servants Want" name="noServant">
          <!-- <div class="error"><?php echo $errors["noServvant"] ?></div> -->
        </div>

        <div class="input-box18">
          <input type="text" placeholder="Estimated Budget Range" name="budget">
          <!-- <div class="error"><?php echo $errors["budget"] ?></div> -->
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>
       

      </div>
    </form>

  </div>

  <div class="photoContent" id=popup-3>
    <form action="#" class="form-area" method="POST">

      <div class="photoq">
    
        <div class="input-box21">
          <select name="eventType" placeholder="Event Type">
          <option value="null">Event Type</option>
          <option value="wedding">Wedding</option>
          <option value="partyf">Party/Festival</option>
          <option value="corparate">Corporate event</option>
          <option value="other">Other</option>
          </select>
        </div>

        <div class="input-box22">
          <input type="text" placeholder="No of Guests" name="noOfGuests">
          <!-- <div class="error"><?php echo $errors["noOfGuests"] ?></div> -->
        </div>

        <div class="input-box23">
        <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box24">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box25">
          <input type="text" placeholder="Estimated Budget Range" name="budget">
          <!-- <div class="error"><?php echo $errors["budget"] ?></div> -->
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>
       

      </div>
    </form>

  </div>

  
  <div class="musicContent" id=popup-4>
    <form action="#" class="form-area" method="POST">

      <div class="musicq">
    
        <div class="input-box31">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box32">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box33">
          <div class="mbandt">
            <input placeholder="Music Band" name="mband">
          </div>
          
          <div class="mbandtick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["mband"] ?></div> -->
          </div>
        </div>

        <div class="input-box34">
         <div class="djst">
            <input placeholder="Djs" name="djs">
          </div>
          
          <div class="djstick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["djs"] ?></div> -->
          </div>
        </div>

        <div class="input-box35">
          <div class="solot">
            <input placeholder="Solo Singer" name="solo">
          </div>
          
          <div class="solotick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["solo"] ?></div> -->
          </div>
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>
       

      </div>
    </form>

  </div>

 
  <div class="danceContent" id=popup-5>
    <form action="#" class="form-area" method="POST">

      <div class="danceq">
    
        <div class="input-box41">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box42">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box43">
          <div class="kandyt">
            <input placeholder="Kandyan Dancer" name="kandy">
          </div>
          
          <div class="kandytick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["kandy"] ?></div> -->
          </div>
        </div>

        <div class="input-box44">
          <div class="lawt">
            <input placeholder="Law Country Dancer" name="law">
          </div>
          
          <div class="lawtick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["law"] ?></div> -->
          </div>
        </div>

        <div class="input-box45">
          <div class="sabat">
            <input placeholder="Sabaragamuwa Dancer" name="saba">
          </div>
          
          <div class="sabatick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["saba"] ?></div> -->
          </div>
        </div>

        <div class="input-box46">
          <div class="west">
            <input placeholder="Western Dancer" name="wes">
          </div>
          
          <div class="westick">
            <input type="checkbox" placeholder="Agree" name="agree">
            <!-- <div class="error"><?php echo $errors["wes"] ?></div> -->
          </div>
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>
       

      </div>
    </form>

  </div>


  <div class="salonContent" id=popup-6>
    <form action="#" class="form-area" method="POST">

      <div class="salonq">
    
        <div class="input-box51">
          <input type="date" placeholder="Event date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box52">
          <select name="eventType" placeholder="Event Type">
          <option value="null">Event Type</option>
          <option value="wedding">Wedding</option>
          <option value="partyf">Party/Festival</option>
          <option value="corparate">Corporate event</option>
          <option value="other">Other</option>
          </select>
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box53">
          <select name="gender" placeholder="Gender">
          <option value="null">Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          </select>
          <!-- <div class="error"><?php echo $errors["gender"] ?></div> -->
        </div>

        <div class="input-box54">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box55">
          <input type="text" placeholder="Salon Type" name="salonT">
          <!-- <div class="error"><?php echo $errors["salonT"] ?></div> -->
        </div>

        
        <div class="input-box56">
          <input type="text" placeholder="No of Dressers" name="dresses">
          <!-- <div class="error"><?php echo $errors["dressers"] ?></div> -->
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>
       

      </div>
    </form>

  </div>


  
  <div class="cakeContent" id=popup-7>
    <form action="#" class="form-area" method="POST">

      <div class="cakeq">
    
        <div class="input-box61">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box62">
          <select name="eventType" placeholder="Event Type">
          <option value="null">Event Type</option>
          <option value="wedding">Wedding</option>
          <option value="partyf">Party/Festival</option>
          <option value="corparate">Corporate event</option>
          <option value="other">Other</option>
          </select>
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> --> 
        </div>

        <div class="input-box63">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box64">
          <select name="cakeType" placeholder="Cake Type">
          <option value="null">Cake Type</option>
          <option value="weddingCake">Wedding Cakes</option>
          <option value="partyCake">Party Cake</option>
          <option value="sweet">Sweets</option>
          </select>
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> --> 
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>

      </div>
    </form>

  </div>


  <div class="decoContent" id=popup-8>
    <form action="#" class="form-area" method="POST">

      <div class="decoq">
    
        <div class="input-box71">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box72">
          <select name="eventType" placeholder="Event Type">
          <option value="null">Event Type</option>
          <option value="wedding">Wedding</option>
          <option value="partyf">Party/Festival</option>
          <option value="corparate">Corporate event</option>
          <option value="other">Other</option>
          </select>
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> --> 
        </div>

        <div class="input-box73">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box74">
          <select name="decoType" placeholder="Decoration Type">
          <option value="null">Decoration Type</option>
          <option value="seti">Seti Back & Poruwa</option>
          <option value="floral">Floral Arrangements</option>
          <option value="corparate">Both</option>
          </select>
          <!-- <div class="error"><?php echo $errors["decoType"] ?></div> --> 
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>

      </div>
    </form>

  </div>


  
  <div class="soundContent" id=popup-9>
    <form action="#" class="form-area" method="POST">

      <div class="soundq">
    
        <div class="input-box81">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
          
        </div>

        <div class="input-box82">
          <select name="eventType" placeholder="Event Type">
          <option value="null">Event Type</option>
          <option value="wedding">Wedding</option>
          <option value="partyf">Party/Festival</option>
          <option value="corparate">Corporate event</option>
          <option value="other">Other</option>
          </select>
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> --> 
        </div>

        <div class="input-box83">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box84">
          <select name="soundlightType" placeholder="Sounds & Lightings">
          <option value="null">Want Service</option>
          <option value="sound">Sounds</option>
          <option value="sound">Lightings</option>
          <option value="both">Both</option>
          </select>
          <!-- <div class="error"><?php echo $errors["soundlightType"] ?></div> --> 
        </div>

        <div class="input-box85">
          <select name="environment" placeholder="Event Environment">
          <option value="null">Event Environment</option>
          <option value="indoor">Indoor Event</option>
          <option value="outdoor">Outdoor Event</option>
          <option value="both">Both</option>
          </select>
          <!-- <div class="error"><?php echo $errors["environment"] ?></div> --> 
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>

      </div>
    </form>

  </div>


  
  <div class="dressContent" id=popup-10>
    <form action="#" class="form-area" method="POST">

      <div class="dressq">
    
        <div class="input-box91">
          <input type="date" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> --> 
        </div>

        <div class="input-box92">
          <select name="eventType" placeholder="Event Type">
          <option value="null">Event Type</option>
          <option value="wedding">Wedding</option>
          <option value="partyf">Party/Festival</option>
          <option value="corparate">Corporate event</option>
          <option value="other">Other</option>
          </select>
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> --> 
        </div>

        <div class="input-box93">
          <select name="city">
          <option value="null">City</option>
          <option value="indoor">Colombo</option>
          <option value="outdoor">Gampaha</option>
          <option value="both">Kaluthara</option>
          <option value="null">Galle</option>
          <option value="indoor">Mathara</option>
          <option value="outdoor">Hambanthota</option>
          <option value="both">Rathnapura</option>
          <option value="null">Kegalle</option>
          <option value="indoor">Kandy</option>
          <option value="outdoor">Nuwara Eliya</option>
          <option value="both">Matale</option>
          <option value="null">Kurunegala</option>
          <option value="indoor">Puttalam</option>
          <option value="outdoor">Badulla</option>
          <option value="both">Monaragala</option>
          <option value="null">Batticaloa</option>
          <option value="indoor">Trincomalee</option>
          <option value="outdoor">Ampara</option>
          <option value="both">Anuradapura</option>
          <option value="null">Polonnaruwa</option>
          <option value="indoor">Vavuniya</option>
          <option value="outdoor">Kilinochchi</option>
          <option value="both">Jaffna</option>
          <option value="both">Mannar</option>
          <option value="both">Mullathivu</option>
          </select>
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box94">
          <select name="dressType" placeholder="Dress type">
          <option value="null">Dress Type</option>
          <option value="male">Male Dress</option>
          <option value="female">Female Dress</option>
          </select>
          <!-- <div class="error"><?php echo $errors["dressType"] ?></div> -->
        </div>

        <div class="save">
          <button type="submit" class="saveb" value="Submit">Submit</button>
        </div>

      </div>
    </form>
  </div>
</div>

</body>
<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?>
<?php linkPhp("footer") ?>
</html>



