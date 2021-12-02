
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" href="spService.css">
    <link rel="stylesheet" href="package.css"> -->
    <!-- <?php linkCSS("vendor/spService");  ?> -->
    <?php linkCSS("navigation"); ?>
    <!-- <?php linkCSS("vendor/spAddPackage"); ?> -->
   
    <?php linkCSS("footer");?>
    <?php linkCSS("vendor/addNewService"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <header>
    <?php linkPhp("navigation") ?>
  </header>

    <!-- add new service popup -->
<div  class="addservice_container">
<!-- The Modal -->
  <div class="form_container">
    <!-- <div class="close-button"><span class="service_close">&times;</span></div> -->
    
    <form id="regForm" action="">

        <h1>Service Registration Form</h1>
        
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
          <div class="content_title"><a><u>Service Details:</u></a></div>
            <div class="row">
              <div class="col_name">
                <label for="sname">Service Name</label>
              </div>
              <div class="col_input">
                <input type="text" id="sname" name="servicename" placeholder="Your service name">
              </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col_name">
                  <label for="sdescription">Service Description</label>
                </div>
                <div class="col_input">
                  <textarea id="sdescription" name="servicedescription" placeholder="Description Here (visible for customers)" style="height:200px"></textarea>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col_name">
                    <label for="sname">Service Type</label>
                </div>
                <div class="col_input">
                <select id="serviceType" name="serviceType" onchange="populate('serviceType')">
                  <option value="">-select type-</option>
                  <option value="cate">Catering</option>
                  <option value="cakes">Cake and sweets</option>
                  <option value="dancing">Dancing groups</option>
                  <option value="deco">Decoration</option>
                  <option value="dresses">Dresses</option>
                  <option value="musical">Musical</option>
                  <option value="photo">Photography</option>
                  <option value="saloon">Saloon</option>
                  <option value="usa">Sounds and lightings</option>
                  <option value="vANDh">Venues and Halls</option>
                </select>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col_name">
                    <label for="etype">Event Types</label>
                </div>
                <div class="col_input">
                    <input type="checkbox" id="et1" name="et1" value="wedd" class="box">
                    <label for="etype1"> Weddings</label><br>
                    <input type="checkbox" id="et2" name="et2" value="party" class="box">
                    <label for="etype2"> Parties/Festivals</label><br>
                    <input type="checkbox" id="et3" name="et3" value="coopE" class="box">
                    <label for="etype3"> Cooperate Events</label><br>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col_name">
                    <label for="sname">Service Privided Areas</label>
                </div>
                <div class="col_input">
                    <input type="checkbox" id="province1" name="province1" value="wedd" class="box">
                    <label for="p1"> Southern Province</label><br>
                    <input type="checkbox" id="province2" name="province2" value="wedd" class="box">
                    <label for="p2"> Western Province</label><br>
                    <input type="checkbox" id="province3" name="province3" value="wedd" class="box">
                    <label for="p3"> Sabaragamuwa Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd" class="box">
                    <label for="p1"> Uva Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd" class="box">
                    <label for="p1"> Central Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd" class="box">
                    <label for="p1"> Eastern Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd" class="box">
                    <label for="p1"> North western Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd" class="box">
                    <label for="p1"> North Central Province</label><br>
                    <input type="checkbox" id="province1" name="province1" value="wedd" class="box">
                    <label for="p1"> Nouthern Province</label><br>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col_name">
                    <label for="sname">Social URL</label>
                </div>
                <div class="col_input">
                    <div class="url_name">Facebook</div>
                    <input type="url" id="furl" name="furl" placeholder="Facebook url here">
                    <div class="url_name">Instagram</div>
                    <input type="url" id="iurl" name="iurl" placeholder="Instagram url here">
                    <div class="url_name">LinkedIn</div>
                    <input type="url" id="lurl" name="lurl" placeholder="LinkedIn url here">
                </div>
            </div>
            <hr/>
          <!-- <p><input placeholder="First name..." oninput="this.className = ''"></p>
          <p><input placeholder="Last name..." oninput="this.className = ''"></p> -->
        </div>
        
        <div class="tab">
          <div class="content_title"><a><u>Booking Setting Details:</u></a></div>

          <div class="row">
            <div class="col_name">
                <label for="rprice">Reservation Price(LKR)</label>
            </div>
            <div class="col_input">
                <input type="text" id="rprice" name="reservationprice" placeholder >
            </div>
          </div>
            <hr/>
          <div class="row">
            <div class="col_name">
                <label for="intialDis">Initial Discount</label>
            </div>
            <div class="col_input">
                <input type="number" id="intialDis" name="initialDiscount" placeholder min="0">
                <a> % discount for first </a>
                <input type="number" id="intialDis" name="initialDiscount" placeholder min="0">
                <a> bookings</a>
            </div>
          </div>
            <hr/>
          <div class="row">
            <div class="col_name">
                <label for="pretime">Preparation Time</label>
            </div>
            <div class="col_input">
                <input type="text" id="pretime" name="preparationtime" placeholder>
            </div>
          </div>
            <hr/>
          <div class="row">
            <div class="col_name">
              <label for="simultaneous">Simultaneous Booking</label>
            </div>
            <div class="col_input">
              <input type="text" id="simultaneous" name="simultaneous_booking" placeholder="Your service name">
            </div>
          </div>
            <hr/>
          <div class="row">
            <div class="col_name">
              <label for="policy">Cancellation Policy</label>
            </div>
            <div class="col_input">
                <select id="policy" name="policy">
                  <option value="cate">3 days before reserve date</option>
                  <option value="cakes">1 week before reserve date</option>
                  <option value="dancing">2 weeks before reserve date</option>    
                </select>
            </div>
          </div>
            <hr/>
        <div class="row">
          <div class="col_name">
            <label for="tANDc">Payment Terms and Conditions</label>
          </div>
          <div class="col_input">
            <textarea id="tANDc" name="payment_tANDc" placeholder="Payment T&C" style="height:100px"></textarea>
          </div>
        </div>
            <hr/>
        <div class="row">
          <div class="col_name">
            <label for="info">Additional Information</label>
          </div>
          <div class="col_input">
            <textarea id="info" name="additionalInfo" placeholder="Additional information about booking" style="height:100px"></textarea>
          </div>
        </div>
            <hr/>

        </div>
         <!-- start of service separate info -->
        <div class="tab">
          <div class="content_title"><a><u>Select Available Features:</u></a></div>

          <div class="features">

  <!-- for hotel and venues -->
  <div id="venue_features" class="venues">
            <div class="row">
              <div class="col_name">
                <label for="vtype">Venue Type</label>
              </div>
              <div class="col_input">
                <input type="radio" id="vt1" name="vt1" value="indoor" class="box">
                <label for="vtype1"> Indoor</label><br>
                <input type="radio" id="vt2" name="vt2" value="outdoor" class="box">
                <label for="vtype2"> Outdoor</label><br>
                 <input type="radio" id="vt3" name="vt3" value="both" class="box">
                <label for="vtype3"> Both</label><br>
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col_name">
                  <label for="capacity">Standing Capacity</label>
              </div>
              <div class="col_input">
                  <input type="text" id="capacity" name="standingcapacity" placeholder min="100">
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col_name">
                <label for="seating">Seating Arrangment</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="sa1" name="sa1" value="banquet" class="box">
                <label for="sa1"> Banquet</label><br>
                <input type="checkbox" id="sa2" name="sa2" value="board" class="box">
                <label for="sa2"> Board</label><br>
                <input type="checkbox" id="sa3" name="sa3" value="classroom" class="box">
                <label for="sa3"> Classroom</label><br>
                <input type="checkbox" id="sa4" name="sa4" value="informal" class="box">
                <label for="sa4"> Informal</label><br>
                <input type="checkbox" id="sa5" name="sa5" value="oval" class="box">
                <label for="sa5"> Oval</label><br>
                <input type="checkbox" id="sa6" name="sa6" value="ushape" class="box">
                <label for="sa6"> U shape</label><br>
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col_name">
                <label for="sname">Additional Features</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="af1" name="af1" value="wifi" class="box">
                <label for="feature1"> Wi fi</label><br>
                <input type="checkbox" id="af2" name="af2" value="parking" class="box">
                <label for="feature2"> Car Parking</label><br>
                <input type="checkbox" id="af3" name="af3" value="reception" class="box">
                <label for="feature3"> Reception area</label><br>
                <input type="checkbox" id="af4" name="af4" value="setiback" class="box">
                <label for="feature4"> Seti back</label><br>
                <input type="checkbox" id="af5" name="af5" value="garden" class="box">
                <label for="feature5"> Garden</label><br>
                <input type="checkbox" id="af6" name="af6" value="smokingarea" class="box">
                <label for="feature6"> Smoking area</label><br>
                <input type="checkbox" id="af7" name="af7" value="dancingfloor" class="box">
                <label for="feature7"> Dancing floor</label><br>
                <input type="checkbox" id="af8" name="af8" value="poruwa" class="box">
                <label for="feature8"> Poruwa</label><br>
              </div>
            </div>
            <hr/>
          </div>

<!-- this is for catering -->
          <div id="catering_features" class="catering">
            <div class="row">
              <div class="col_name">
                <label for="mealtype">Meals provided</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="mt1" name="mt1" value="breakfast" class="box"> 
                <label for="mtype1"> Breakfast</label><br>
                <input type="checkbox" id="mt2" name="mt2" value="lunch" class="box"> 
                <label for="mtype2"> Lunch</label><br>
                <input type="checkbox" id="mt3" name="mt3" value="dinner" class="box"> 
                <label for="mtype3"> Dinner</label><br>
                <input type="checkbox" id="mt3" name="mt3" value="beverages" class="box"> 
                <label for="mtype3"> Beverages</label><br>
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col_name">
                  <label for="capacity">No: of attendants</label>
              </div>
              <div class="col_input">
                  <input type="text" id="attendants" name="attendants" placeholder min="100">
              </div>
            </div>
            <hr/>
          </div>

<!-- this is for musical -->

          <div id="musical_features" class="musical">
            <div class="row">
              <div class="col_name">
                <label for="musicaltype">Music provider type</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="musict1" name="musict1" value="insru" class="box">
                <label for="musictype1"> Insrumentalists</label><br>
                <input type="checkbox" id="musict2" name="musict2" value="solo" class="box">
                <label for="musictype2"> Solo singer</label><br>
                <input type="checkbox" id="musict1" name="musict1" value="band" class="box">
                <label for="musictype1"> Band</label><br>
                <input type="checkbox" id="musict1" name="musict1" value="dj" class="box">
                <label for="musictype1"> DJ</label><br>
                
              </div>
            </div>
            <hr/>
            
          </div>

<!-- this is foe dancing -->
          <div id="dancing_features" class="dancing">
            <div class="row">
              <div class="col_name">
                <label for="dancetype">Dancing categories</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="dancet1" name="dancet1" value="kandy" class="box">
                <label for="dancetype1"> Kandyan dance</label><br>
                <input type="checkbox" id="dancet2" name="dancet2" value="sabara" class="box">
                <label for="dancetype2"> Sabaragamuwa dance</label><br>
                <input type="checkbox" id="dancet3" name="dancet3" value="low" class="box">
                <label for="dancetype3"> Low country dance</label><br>
                <input type="checkbox" id="dancet4" name="dancet4" value="wes" class="box">
                <label for="dancetype4"> Western dance</label><br>
                <input type="checkbox" id="dancet5" name="dancet5" value="free" class="box">
                <label for="dancetype5"> Free style</label><br>
                
                
              </div>
            </div>
            <hr/>
            
          </div>

<!-- this is for saloon -->
          <div id="saloon_features" class="saloon">
            <div class="row">
              <div class="col_name">
                <label for="saloontype">Saloon type</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="saloont1" name="saloont1" value="male" class="box">
                <label for="saloontype1"> Male</label><br>
                <input type="checkbox" id="saloont2" name="saloont2" value="female" class="box">
                <label for="saloontype2"> Female</label><br>
                <input type="checkbox" id="saloont3" name="saloont3" value="both" class="box">
                <label for="saloontype3"> Both</label><br>
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col_name">
                <label for="supptype">Suppling service</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="suppt1" name="suppt1" value="hair" class="box">
                <label for="supptype1"> Hair cut & hair styles</label><br>
                <input type="checkbox" id="suppt2" name="suppt2" value="makeup" class="box">
                <label for="supptype2"> Make up</label><br>
                <input type="checkbox" id="suppt3" name="suppt3" value="dressing" class="box">
                <label for="supptype3"> Dressing</label><br>
              </div>
            </div>
            <hr/>
          </div>

<!-- this is for cake and sweets -->
          <div id="cakes_features" class="cakes">
            <div class="row">
              <div class="col_name">
                <label for="caketype">Cake type</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="caket1" name="caket1" value="weddingcake" class="box">
                <label for="caketype1"> Wedding cakes</label><br>
                <input type="checkbox" id="caket2" name="caket2" value="cakestruc" class="box">
                <label for="caketype2"> Wedding cake structure</label><br>
                <input type="checkbox" id="caket3" name="caket3" value="birthday" class="box">
                <label for="caketype3"> Birthday cakes</label><br>
                <input type="checkbox" id="caket4" name="caket4" value="partycake" class="box">
                <label for="caketype4"> Party cakes</label><br>
                
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col_name">
                <label for="sweettype">Sweet type</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="sweett1" name="sweett1" value="cookies" class="box">
                <label for="sweettype1"> Cookies</label><br>
                <input type="checkbox" id="sweett2" name="sweett2" value="cupcakes" class="box">
                <label for="sweettype2"> Cupcakes</label><br>
                <input type="checkbox" id="sweett3" name="sweett3" value="brownies" class="box">
                <label for="sweettype3"> Brownies</label><br>
                <input type="checkbox" id="sweett4" name="sweett4" value="candy" class="box">
                <label for="sweettype4"> Candies</label><br>
              </div>
            </div>
            <hr/>
            
          </div>

<!-- this is for decorations -->
          <div id="deco_features" class="decoration">
            <div class="row">
              <div class="col_name">
                <label for="decotype">Supplying items</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="decot1" name="decot1" value="caketable" class="box">
                <label for="decotype1"> Cake table</label><br>
                <input type="checkbox" id="decot2" name="decot2" value="cocktailtable" class="box">
                <label for="decotype2"> Coketail table</label><br>
                <input type="checkbox" id="decot3" name="decot3" value="caketable" class="box">
                <label for="decotype3"> Dance floor</label><br>
                <input type="checkbox" id="decot4" name="decot4" value="poruwa" class="box">
                <label for="decotype4"> Poruwa</label><br>
                <input type="checkbox" id="decot4" name="decot4" value="setiback" class="box">
                <label for="decotype4"> Setiback</label><br>
                <input type="checkbox" id="decot4" name="decot4" value="lights" class="box">
                <label for="decotype4"> Lights</label><br>
                
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col_name">
                <label for="flowtype">Flower decoratios</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="flowt1" name="flowt1" value="poruw&seti" class="box">
                <label for="flowtype1"> Poruwa & Setiback design</label><br>
                <input type="checkbox" id="flowt2" name="flowt2" value="tabledeco" class="box">
                <label for="flowtype2"> Table decor</label><br>
                <input type="checkbox" id="flowt3" name="flowt3" value="oilLamp" class="box">
                <label for="flowtype3"> Oil lamp decor</label><br>
                <input type="checkbox" id="flowt4" name="flowt4" value="entrance" class="box">
                <label for="flowtype4"> Entrance/Pathway decor</label><br>
                <input type="checkbox" id="flowt5" name="flowt5" value="headtable" class="box">
                <label for="flowtype5"> Head table & champagne table decor</label><br>
                
              </div>
            </div>
            <hr/>
          </div>

<!-- this is for dress suppliers -->
          <div id="dress_features" class="dressSupp">
            <div class="row">
              <div class="col_name">
                <label for="sectiontype">Available sections</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="sectiont1" name="sectiont1" value="womensec" class="box">
                <label for="sectiontype1"> Women section</label><br>
                <input type="checkbox" id="sectiont2" name="sectiont2" value="mensec" class="box">
                <label for="sectiontype2"> Men section</label><br>
                <input type="checkbox" id="sectiont3" name="sectiont3" value="childsec" class="box">
                <label for="sectiontype3"> Children section</label><br>
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col_name">
                <label for="dresscat">Dress Categories</label>
              </div>
              <div class="col_input">
                <input type="checkbox" id="dresscat1" name="dresscat1" value="bridal" class="box">
                <label for="dresscattype1"> Bridal dresses</label><br>
                <input type="checkbox" id="dresscat2" name="dresscat2" value="bridesmaid" class="box">
                <label for="dresscattype2"> Bridesmaid & flower girl dresses</label><br>
                <input type="checkbox" id="dresscat3" name="dresscatt3" value="wedguest" class="box">
                <label for="dresscattype3"> Wedding guest dresses</label><br>
                <input type="checkbox" id="dresscat4" name="dresscat4" value="partydress" class="box">
                <label for="dresscattype4"> Party dresses</label><br>
                <input type="checkbox" id="dresscat5" name="dresscat5" value="groom" class="box">
                <label for="dresscattype5"> Groom costumes</label><br>
                <input type="checkbox" id="dresscat6" name="dressct6" value="fullkit" class="box">
                <label for="dresscattype6"> Men fullkit</label><br>
              </div>
            </div>
            <hr/>
          </div>

      <div id="no_features" class="no_features">
        <a>No features available</a>
      </div>          





          </div>
        </div>
        <!-- end of service separate info -->
        <!-- <div class="tab">
          <div class="content_title"><a><u>Image and caption:</u></a></div>

          <div class="row">
            <div class="col_name">
              <label for="caption">Caption</label>
            </div>
            <div class="col_input">
              <input type="text" id="caption" name="caption" placeholder="Add your service caption">
            </div>
          </div>
            <hr/>
          <div class="row">
            <div class="col_name">
              <label for="simage">Image</label>
            </div>
            <div class="col_input">
              <input type="file" id="simage" name="serviceimage"><br><br>
            </div>
          </div>
            <hr/>
          <div class="row">
            <div class="col_name">
              <label for="sdoc">Document</label>
            </div>
            <div class="col_input">
              <input type="file" id="sdoc" name="servicedoc"><br><br>
            </div>
          </div>
            <hr/>
        </div> -->
        
        <div style="overflow:auto;">
          <div class="formBtn" style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        
        <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
      

 


        
    </form>
  </div>
</div>

<script>

// var venueF = document.getElementById("venue_features");
//   var cateF = document.getElementById("catering_features");
//   var musicF = document.getElementById("musical_features");
//   var danceF = document.getElementById("dancing_features");
//   var saloonF = document.getElementById("saloon_features");
//   var cakesF = document.getElementById("cakes_features");
//   var decoF = document.getElementById("deco_features");
//   var dressF = document.getElementById("dress_features");
//   var noF = document.getElementById("no_features");
        
//   function populate(serType) {
            
//     var serType = document.getElementById("serviceType");
//     if(serType.value=="cate"){
//       venueF.style.display = "none";
//       cateF.style.display = "block";
//       musicF.style.display = "none";
//       danceF.style.display = "none";
//       saloonF.style.display = "none";
//       cakesF.style.display = "none";
//       decoF.style.display = "none";
//       dressF.style.display = "none";
//       noF.style.display = "none";

//     }
//     else if(serType.value=="cakes"){
//       venueF.style.display = "none";
//       cateF.style.display = "none";
//       musicF.style.display = "none";
//       danceF.style.display = "none";
//       saloonF.style.display = "none";
//       cakesF.style.display = "block";
//       decoF.style.display = "none";
//       dressF.style.display = "none";
//       noF.style.display = "none";
//     }
//     else if(serType.value=="dancing"){
//       venueF.style.display = "none";
//       cateF.style.display = "none";
//       musicF.style.display = "none";
//       danceF.style.display = "block";
//       saloonF.style.display = "none";
//       cakesF.style.display = "none";
//       decoF.style.display = "none";
//       dressF.style.display = "none";
//       noF.style.display = "none";
//     }
//     else if(serType.value=="deco"){
//       venueF.style.display = "none";
//       cateF.style.display = "none";
//       musicF.style.display = "none";
//       danceF.style.display = "none";
//       saloonF.style.display = "none";
//       cakesF.style.display = "none";
//       decoF.style.display = "block";
//       dressF.style.display = "none";
//       noF.style.display = "none";
//     }
//     else if(serType.value=="dresses"){
//       venueF.style.display = "none";
//       cateF.style.display = "none";
//       musicF.style.display = "none";
//       danceF.style.display = "none";
//       saloonF.style.display = "none";
//       cakesF.style.display = "none";
//       decoF.style.display = "none";
//       dressF.style.display = "block";
//       noF.style.display = "none";
//     }
//     else if(serType.value=="musical"){
//       venueF.style.display = "none";
//       cateF.style.display = "none";
//       musicF.style.display = "block";
//       danceF.style.display = "none";
//       saloonF.style.display = "none";
//       cakesF.style.display = "none";
//       decoF.style.display = "none";
//       dressF.style.display = "none";
//       noF.style.display = "none";
//     }
//     else if(serType.value=="saloon"){
//       venueF.style.display = "none";
//       cateF.style.display = "none";
//       musicF.style.display = "none";
//       danceF.style.display = "none";
//       saloonF.style.display = "block";
//       cakesF.style.display = "none";
//       decoF.style.display = "none";
//       dressF.style.display = "none";
//       noF.style.display = "none";
//     }
//     else if(serType.value=="vANDh"){
//       venueF.style.display = "block";
//       cateF.style.display = "none";
//       musicF.style.display = "none";
//       danceF.style.display = "none";
//       saloonF.style.display = "none";
//       cakesF.style.display = "none";
//       decoF.style.display = "none";
//       dressF.style.display = "none";
//       noF.style.display = "none";
//     }
//     else{
//       venueF.style.display = "none";
//       cateF.style.display = "none";
//       musicF.style.display = "none";
//       danceF.style.display = "none";
//       saloonF.style.display = "none";
//       cakesF.style.display = "none";
//       decoF.style.display = "none";
//       dressF.style.display = "none";
//       noF.style.display = "block";
//     }


//   }

  </script>

  <?php linkJS("vendor/addNewService"); ?>
  <?php linkPhp("footer") ?>
</body>

</html>