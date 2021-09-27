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
          <input type="text" placeholder="Venue Type" name="venueType">
          <!-- <div class="error"><?php echo $errors["venueType"] ?></div> -->
        </div>

        <div class="input-box2">
          <input type="text" placeholder="No of Guests" name="noOfGuests">
          <!-- <div class="error"><?php echo $errors["noOfGuests"] ?></div> -->
        </div>

        <div class="input-box3">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box4">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box5">
          <input type="text" placeholder="Seating arrangements" name="seatingA">
          <!-- <div class="error"><?php echo $errors["seatingA"] ?></div> -->
        </div>

        <div class="input-box6">
          <input type="text" placeholder="Dancing Floor" name="dancing">
          <!-- <div class="error"><?php echo $errors["dancing"] ?></div> -->
        </div>

        <div class="input-box7">
          <input type="text" placeholder="Seti Back" name="seti">
          <!-- <div class="error"><?php echo $errors["seti"] ?></div> -->
        </div>

        <div class="input-box8">
          <input type="text" placeholder="Poruwa" name="poruwa">
          <!-- <div class="error"><?php echo $errors["poruwa"] ?></div> -->
        </div>

        <div class="input-box9">
          <input type="text" placeholder="Estimated Budget Range" name="budget">
          <!-- <div class="error"><?php echo $errors["budget"] ?></div> -->
        </div>
       

      </div>
    </form>

  </div>

  <div class="cateringContent" id=popup-2>
    <form action="#" class="form-area" method="POST">

      <div class="cateringq">
    
        <div class="input-box11">
          <input type="text" placeholder="Event Type" name="eventType">
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box12">
          <input type="text" placeholder="No of Guests" name="noOfGuests">
          <!-- <div class="error"><?php echo $errors["noOfGuests"] ?></div> -->
        </div>

        <div class="input-box13">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box14">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box15">
          <input type="text" placeholder="Meal Time" name="mealT">
          <!-- <div class="error"><?php echo $errors["mealT"] ?></div> -->
        </div>

        <div class="input-box16">
          <input type="text" placeholder="Buffe" name="buffe">
          <!-- <div class="error"><?php echo $errors["buffe"] ?></div> -->
        </div>

        <div class="input-box17">
          <input type="text" placeholder="No of Servants Want" name="noServant">
          <!-- <div class="error"><?php echo $errors["noServvant"] ?></div> -->
        </div>

        <div class="input-box18">
          <input type="text" placeholder="Estimated Budget Range" name="budget">
          <!-- <div class="error"><?php echo $errors["budget"] ?></div> -->
        </div>
       

      </div>
    </form>

  </div>

  <div class="photoContent" id=popup-3>
    <form action="#" class="form-area" method="POST">

      <div class="photoq">
    
        <div class="input-box21">
          <input type="text" placeholder="Event Type" name="eventType">
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box22">
          <input type="text" placeholder="No of Guests" name="noOfGuests">
          <!-- <div class="error"><?php echo $errors["noOfGuests"] ?></div> -->
        </div>

        <div class="input-box23">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box24">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box25">
          <input type="text" placeholder="Estimated Budget Range" name="budget">
          <!-- <div class="error"><?php echo $errors["budget"] ?></div> -->
        </div>
       

      </div>
    </form>

  </div>

  
  <div class="musicContent" id=popup-4>
    <form action="#" class="form-area" method="POST">

      <div class="musicq">
    
        <div class="input-box31">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box32">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box33">
          <input type="text" placeholder="Music Band" name="musicBand">
          <!-- <div class="error"><?php echo $errors["musicBand"] ?></div> -->
        </div>

        <div class="input-box34">
          <input type="text" placeholder="Djs" name="djs">
          <!-- <div class="error"><?php echo $errors["djs"] ?></div> -->
        </div>

        <div class="input-box35">
          <input type="text" placeholder="Solo Singer" name="solo">
          <!-- <div class="error"><?php echo $errors["solo"] ?></div> -->
        </div>
       

      </div>
    </form>

  </div>

 
  <div class="danceContent" id=popup-5>
    <form action="#" class="form-area" method="POST">

      <div class="danceq">
    
        <div class="input-box41">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box42">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box43">
          <input type="text" placeholder="Kandyan Dancers" name="kandyan">
          <!-- <div class="error"><?php echo $errors["kandyan"] ?></div> -->
        </div>

        <div class="input-box44">
          <input type="text" placeholder="Sabaragamuwa Dancers" name="saba">
          <!-- <div class="error"><?php echo $errors["saba"] ?></div> -->
        </div>

        <div class="input-box45">
          <input type="text" placeholder="Western Dancers" name="wes">
          <!-- <div class="error"><?php echo $errors["wes"] ?></div> -->
        </div>
       

      </div>
    </form>

  </div>


  <div class="salonContent" id=popup-6>
    <form action="#" class="form-area" method="POST">

      <div class="salonq">
    
        <div class="input-box51">
          <input type="text" placeholder="Male" name="male">
          <!-- <div class="error"><?php echo $errors["male"] ?></div> -->
        </div>

        <div class="input-box52">
          <input type="text" placeholder="Female" name="female">
          <!-- <div class="error"><?php echo $errors["female"] ?></div> -->
        </div>

        <div class="input-box53">
          <input type="text" placeholder="Event Type" name="eventType">
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box54">
          <input type="text" placeholder="City" name="city">
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
       

      </div>
    </form>

  </div>


  
  <div class="cakeContent" id=popup-7>
    <form action="#" class="form-area" method="POST">

      <div class="cakeq">
    
        <div class="input-box61">
          <input type="text" placeholder="Event Type" name="eventType">
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box62">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box63">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box64">
          <input type="text" placeholder="Cake Type" name="cakeType">
          <!-- <div class="error"><?php echo $errors["cakeType"] ?></div> -->
        </div>

      </div>
    </form>

  </div>


  <div class="decoContent" id=popup-8>
    <form action="#" class="form-area" method="POST">

      <div class="decoq">
    
        <div class="input-box71">
          <input type="text" placeholder="Event Type" name="eventType">
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box72">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box73">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box74">
          <input type="text" placeholder="Seti Back & Poruwa" name="seti">
          <!-- <div class="error"><?php echo $errors["seti"] ?></div> -->
        </div>

        <div class="input-box75">
          <input type="text" placeholder="Floral Arrangement" name="floral">
          <!-- <div class="error"><?php echo $errors["floral"] ?></div> -->
        </div>

      </div>
    </form>

  </div>


  
  <div class="soundContent" id=popup-9>
    <form action="#" class="form-area" method="POST">

      <div class="soundq">
    
        <div class="input-box81">
          <input type="text" placeholder="Event Type" name="eventType">
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box82">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box83">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box84">
          <input type="text" placeholder="Sounds" name="sounds">
          <!-- <div class="error"><?php echo $errors["sounds"] ?></div> -->
        </div>

        <div class="input-box85">
          <input type="text" placeholder="Lightings" name="light">
          <!-- <div class="error"><?php echo $errors["light"] ?></div> -->
        </div>

        <div class="input-box86">
          <input type="text" placeholder="Indoor Event" name="indoor">
          <!-- <div class="error"><?php echo $errors["indoor"] ?></div> -->
        </div>

        <div class="input-box87">
          <input type="text" placeholder="Outdoor Event" name="outdoor">
          <!-- <div class="error"><?php echo $errors["outdoor"] ?></div> -->
        </div>

      </div>
    </form>

  </div>


  
  <div class="dressContent" id=popup-10>
    <form action="#" class="form-area" method="POST">

      <div class="dressq">
    
        <div class="input-box91">
          <input type="text" placeholder="Event Type" name="eventType">
          <!-- <div class="error"><?php echo $errors["eventType"] ?></div> -->
        </div>

        <div class="input-box92">
          <input type="text" placeholder="Event Date" name="eventDate">
          <!-- <div class="error"><?php echo $errors["eventDate"] ?></div> -->
        </div>

        <div class="input-box93">
          <input type="text" placeholder="City" name="city">
          <!-- <div class="error"><?php echo $errors["city"] ?></div> -->
        </div>

        <div class="input-box94">
          <input type="text" placeholder="Male" name="male">
          <!-- <div class="error"><?php echo $errors["male"] ?></div> -->
        </div>

        <div class="input-box95">
          <input type="text" placeholder="Female" name="female">
          <!-- <div class="error"><?php echo $errors["female"] ?></div> -->
        </div>

        <div class="input-box96">
          <input type="text" placeholder="No of Hiring Dates" name="hire">
          <!-- <div class="error"><?php echo $errors["hire"] ?></div> -->
        </div>

      </div>
    </form>

  </div>


</div>

<script>
  var ven = document.getElementById("popup-1");
  var cate = document.getElementById("popup-2");
  var photo = document.getElementById("popup-3");
  var music =  document.getElementById("popup-4");
  var dance =  document.getElementById("popup-5");
  var salon =  document.getElementById("popup-6");
  var cake =  document.getElementById("popup-7");
  var deco =  document.getElementById("popup-8");
  var sound =  document.getElementById("popup-9");
  var dress =  document.getElementById("popup-10");
  var conent = document.getElementById("con");

  var vBtn = document.getElementById("venue");
  var cBtn = document.getElementById("catering");
  var pBtn = document.getElementById("photo");
  var mBtn =  document.getElementById("music");
  var dBtn =  document.getElementById("dance");
  var sBtn =  document.getElementById("salon");
  var caBtn =  document.getElementById("cake");
  var deBtn =  document.getElementById("deco");
  var slBtn =  document.getElementById("sound");
  var dsBtn =  document.getElementById("dress");

  vBtn.onclick = function(){
    ven.style.display="block";
    cate.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    conent.style.display="none";
  }

  cBtn.onclick = function(){
    cate.style.display="block";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    conent.style.display="none";
  }
   
  pBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="block";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    conent.style.display="none";
  }

  mBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="block";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    conent.style.display="none";
  }

  dBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="block";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    conent.style.display="none";
  }

  sBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="block";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    conent.style.display="none";
  }

  caBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="block";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    conent.style.display="none";
  }

  deBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="block";
    sound.style.display="none";
    dress.style.display="none";
    conent.style.display="none";
  }

  slBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="block";
    dress.style.display="none";
    conent.style.display="none";
  }

  dsBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="block";
    conent.style.display="none";
  }

</script>


</body>
<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkPhp("footer") ?>
</html>