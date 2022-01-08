<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("vendor/venuesANDhalls"); ?>
    <?php linkCSS("vendor/serviceCalendar"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php linkCSS("home-new"); ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer"); ?>
    <title>service</title>
</head>

<body>
    <header>
        <?php
        if (!isset($_SESSION["type"])) {
            linkPhp("Navigation");
        } else {
            if ($_SESSION["type"] == "customer") {
                linkPhp("customerNavigation");
            } else {
                linkPhp("Navigation");
            }
        }

        ?>
    </header>
    <div class="container">
        <?php while ($row = mysqli_fetch_assoc($data['service'])){
           
            $i=1;

            echo " 
            <div class=\"image_container\">
                <img class=\"mySlides\" src=\"public/img/hotel/hotel1.jpg\" >
                <img class=\"mySlides\" src=\"public/img/hotel/hotel2.jpg\" >
                <img class=\"mySlides\" src=\"public/img/hotel/hotel3.jpg\" >
                <img class=\"mySlides\" src=\"public/img/hotel/hotel4.jpg\" >
                <img class=\"mySlides\" src=\"public/img/hotel/hotel5.png\" >
                <a href=\"https://youtu.be/G9Sf5IUsHfI\"><i class=\"fa fa-youtube-play fa-2x\" aria-hidden=\"true\"></i></a>
            </div>
            <div class=\"content\">
            <div class=\"basic_details\">
                <div class=\"left_side\">
                    <div class=\"service_type\">
         ";
         if($row['service_type'] == "venues_halls"){
            echo " <img src=\"public/img/feature img/hotel.png\" alt=\"Avatar\" class=\"stype_img\">
            <a>Venues & Halls</a> ";
         }
         echo "
         </div>
         <div class=\"service_name\">$row[service_name]</div>
         <div class=\"location_name\">$row[service_location]</div>
         <p>$row[description]</p>
        ";

//below part has to be changed
echo " 

<div class=\"left_row  type1\">
    <a>Supported Events</a>
    <div class=\"sub_row\">
";
$etype = explode(',' , $row['event_type']);

foreach($etype as $value){
    if($value=='wedding'){
        echo " 
            <div class=\"column\">
                <img src=\"public/img/feature img/wedding-couple.png\" alt=\"Avatar\" class=\"feature_img\">
                <a>Weddings</a>
            </div>
        ";
    }
    elseif($value=='party'){
        echo " 
        <div class=\"column\">
            <img src=\"public/img/feature img/celebrating.png\" alt=\"Avatar\" class=\"feature_img\">
            <a>Parties/Festivals</a>
        </div>
        ";
    }
    elseif($value=='cooperative'){
        echo " 
        <div class=\"column\">
            <img src=\"public/img/feature img/meeting.png\" alt=\"Avatar\" class=\"feature_img\">
            <a>Coorperative events</a>
        </div>
        ";
    }
}
echo "</div>
</div> ";
if($row['service_type']=="venues_halls"){



                echo " 
                    <div class=\"left_row type2\">
                        <a>Overview</a>
                        <div class=\"sub_row\">
                            <div class=\"column\">
                                <img src=\"public/img/feature img/apartment.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Indoor</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/feature img/crowd.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>600 Guests</a>
                            </div>
                        </div>
                    </div> ";

                    echo "
                    <div class=\"left_row type2\">
                        <a>Features</a>
                        <div class=\"sub_row\">
                            <div class=\"column\">
                                <img src=\"public/img/feature img/wifi.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Wifi</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/feature img/trees.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Garden</a>
                            </div>
                        </div>
                        <div class=\"sub_row\">
                            <div class=\"column\">
                                <img src=\"public/img/feature img/parking-sign.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Car parking</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/feature img/smoking-area.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Smoking area</a>
                            </div>
                        </div>
                        <div class=\"sub_row\">
                            <div class=\"column\">
                                <img src=\"public/img/feature img/reception.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Reception area</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/feature img/dance-floor.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Dancing floor</a>
                            </div>
                        </div>
                        <div class=\"sub_row\">
                            <div class=\"column\">
                                <img src=\"public/img/feature img/sofa.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Seti back</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/feature img/wedding-arch.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Poruwa</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"left_row type1\">
                        <a>Seating arrangement</a>
                        <div class=\"sub_row\">
                            <div class=\"column\">
                                <img src=\"public/img/seating/banquet.jpg\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Banquet</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/seating/board.png\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Board</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/seating/classroom.jpg\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Classroom</a>
                            </div>
                        </div>
                        <div class=\"sub_row\">
                            <div class=\"column\">
                                <img src=\"public/img/seating/informal.jpg\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Informal</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/seating/Oval.jpg\" alt=\"Avatar\" class=\"feature_img\">
                                <a>Oval</a>
                            </div>
                            <div class=\"column\">
                                <img src=\"public/img/seating/u shape.jpg\" alt=\"Avatar\" class=\"feature_img\">
                                <a>U shape</a>
                            </div>
                        </div>
                    </div>
                </div>
";
}
elseif($row['service_type']=="catering"){
    echo " 
        <div class=\"left_row type2\">
            <a>Meals Provided</a>
            <div class=\"sub_row\">
                <div class=\"column\">
                    <a>Breakfast</a>
                </div>
                <div class=\"column\">
                    <a>Lunch</a>
                </div>
            </div>
        </div> 
        <div class=\"left_row type2\">
            <a>Maximum atetendants for event</a>
            <div class=\"sub_row\">
                <div class=\"column\">
                    <a>$row[no_of_attendants]</a>
                </div>
                
            </div>
        </div>";
}
elseif($row['service_type']=="cakes"){
    echo " 
    <div class=\"left_row type2\">
        <a>CAke type</a>
        <div class=\"sub_row\">
            <div class=\"column\">
                <a>party cakes</a>
            </div>
            
        </div>
    </div> 
     
        <div class=\"left_row type2\">
            <a>Sweet type</a>
            <div class=\"sub_row\">
                <div class=\"column\">
                    <a>Cookies</a>
                </div>
                
            </div>
        </div> 
    
";}
elseif($row['service_type']=="dancing"){
    echo " 
        <div class=\"left_row type2\">
            <a>Categories</a>
            <div class=\"sub_row\">
                <div class=\"column\">
                    <a>free style</a>
                </div>
                
            </div>
        </div> 
    ";
}
elseif($row['service_type']=="decoration"){
    echo " 
        <div class=\"left_row type2\">
            <a>Flower decorations</a>
            <div class=\"sub_row\">
                <div class=\"column\">
                    <a>Poruwa and setiback designs</a>
                </div>
                
            </div>
        </div> 
    ";
}
elseif($row['service_type']=="dresses"){
    echo " 
        <div class=\"left_row type2\">
            <a>Dress categories</a>
            <div class=\"sub_row\">
                <div class=\"column\">
                    <a>aBridal dresess</a>
                </div>
                
            </div>
        </div> 
    ";
}
elseif($row['service_type']=="musical"){
    echo " 
        <div class=\"left_row type2\">
            <a>Music provider type</a>
            <div class=\"sub_row\">
                <div class=\"column\">
                    <a>Solo singer</a>
                </div>
                
            </div>
        </div> 
    ";
}
elseif($row['service_type']=="photography"){
    echo " 
        <div class=\"left_row type2\">
            <a>no features</a>
            
        </div> 
    ";
}
elseif($row['service_type']=="saloon"){
    echo " 
        <div class=\"left_row type2\">
            <a>supplying services/a>
            <div class=\"sub_row\">
                <div class=\"column\">
                    <a>Makeup</a>
                </div>
                
            </div>
        </div> 
    ";
}
elseif($row['service_type']=="sounds_lightings"){
    echo " 
        <div class=\"left_row type2\">
            <a>no features</a>
            
        </div> 
    ";
}
elseif($row['service_type']=="eventPlanner"){
    echo " 
        <div class=\"left_row type2\">
            <a>no features</a>
            
        </div> 
    ";
}?>
    <?php
        echo "        
        <div class=\"right_side\">
            <div class=\"request_container\">
            <form action=\"http://localhost/partyak/spService/bookingDet/$row[service_id] \" class=\"form-area\" method=\"POST\">
                Reserve For
            <div class=\"reserve_price\">
                <div class=\"price\">
                    $row[advance_price]
                </div>
                <div class=\"lkr\">
                    LKR
                </div>
            </div>
            <div class=\"reserve_details\">
                <div class=\"row\">
                    <div class=\"col_name\">
                        <label>Event type</label>
                    </div>
                    <div class=\"col_input\">
                        <select id=\"eType\" name=\"eventType\">
                            <option value=\"Wedding\">Wedding</option>
                            <option value=\"Party\">Party/Festival</option>
                            <option value=\"Cooperative event\">Cooperative event</option>
                            <option value=\"Personal\">Personalize event</option>
                        </select>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col_name\">
                        <label>Guest count</label>
                    </div>
                    <div class=\"col_input\">
                        <input type=\"text\" id=\"sname\" name=\"guestcount\" placeholder>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col_name\">
                        <label>Pick your date</label>
                    </div>
                    <div class=\"col_input\">
                        <input type=\"date\" id=\"sname\" name=\"reservedate\" placeholder>
                    </div>
                </div>
                <div class=\"row\">
                <div class=\"col_name\">
                    <label>Pick your package</label>
                </div>
                <div class=\"col_input\">
                    <select id=\"pType\" name=\"packageType\">

        ";
}?>
<?php while ($row2 = mysqli_fetch_assoc($data['package_data'])){
            

        echo "
       

                        <option value=\"$row2[package_name]\">$row2[package_name]</option>";}

                        echo"
                        
                    </select>
                </div>
            </div>
        ";

?>
<?php mysqli_data_seek($data['service'],0);
while ($row = mysqli_fetch_assoc($data['service'])){

        
    
        echo "
        </div>
            <div class=\"request\">
                <button type=\"submit\" id=\"submitid\"  value=\"Submit\">Request Service</button>
            </div>
            <div class=\"notice\">
                *After requesting service you will recive vendor response and then you can confirm the payment
            </div>
            <div class=\"message\">
                <button>Send Message</button>
            </div>
        </div>
        </form>
       
        ";?>
    
        <?php
        //this calender should be changed
        echo " 
        <div class=\"calendar_container\">
            <a class=\"name\">Availability Calendar</a>

                <div class=\"calendar\">
                    <div class=\"month\">
                        <i class=\"fa fa-angle-left prev\"></i>
                        <div class=\"date\">
                            <h1></h1>
                            <p></p>
                        </div>
                        <i class=\"fa fa-angle-right next\"></i>
                    </div>
                    <div class=\"weekdays\">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class=\"days\"></div>
                </div>


                </div>
        
            </div>
        </div>
        
        <div class=\"additional_details\">
            <div class=\"details_row\">
                <div class=\"title\">
                    <label>Payment Conditions</label>
                </div>
                <div class=\"details\">
                        $row[payment_terms_and_conditions]
                </div>
            </div>
            <div class=\"details_row\">
                <div class=\"title\">
                    <label>Cancelletion Terms</label>
                </div>
        ";

        if($row['cancellation_policy'] == "2 weeks"){
            echo "
            <div class=\"details\">
                *Non-refundable Reservation Fee
                <br>The reservation fee as listed in the box on the right with your payment details will not be refundable,
                any other payment made will be refundable if cancellation is made 2 weeks (14 days) prior to the (your event’s) scheduled time of commencement.
                Example: If event starts on 31st December at 9AM (local time of Vendor),
                cancel before 9AM (local time of Vendor) on 17th December for a refund of any payments made excluding the reservation fee.
            </div>
            ";
        }
        elseif($row['cancellation_policy'] == "1 week"){
            echo "
            <div class=\"details\">
                *Non-refundable Reservation Fee
                <br>The reservation fee as listed in the box on the right with your payment details will not be refundable,
                any other payment made will be refundable if cancellation is made 1 week (7 days) prior to the (your event’s) scheduled time of commencement.
                Example: If event starts on 31st December at 9AM (local time of Vendor),
                cancel before 9AM (local time of Vendor) on 24th December for a refund of any payments made excluding the reservation fee.
            </div>
            ";
        }
        elseif($row['cancellation_policy'] == "3 days"){
            echo "
            <div class=\"details\">
                *Non-refundable Reservation Fee
                <br>The reservation fee as listed in the box on the right with your payment details will not be refundable,
                any other payment made will be refundable if cancellation is made 3 days prior to the (your event’s) scheduled time of commencement.
                Example: If event starts on 31st December at 9AM (local time of Vendor),
                cancel before 9AM (local time of Vendor) on 28th December for a refund of any payments made excluding the reservation fee.
            </div>
            ";
        }

            
                
        echo "
            </div>
            <div class=\"details_row\">
                <div class=\"title\">
                    <label>Additional Information</label>
                </div>
                <div class=\"details\">
                    *Initial discount: $row[initial_discount]% (discount for first $row[initial_count] bookings)
                    <br>*Preparation time: $row[preparation_time]
                </div>
            </div>
        </div>
        <div class=\"allpackages\">
            <label for=\"package\">Packages</label>
        ";

        

    }?>
    <?php   mysqli_data_seek($data['package_data'],0); 
    while ($row2 = mysqli_fetch_assoc($data['package_data'])){ 
        
        echo "
        
            <div class=\"package\">
                <div class=\"package_content\">
                    <label>$row2[package_name]</label>
                    <div class=\"package_summary\">
                        $row2[description]
                    </div>
                    <a class=\"validation\"> Valid from : $row2[valid_from] &emsp; Valid Until : $row2[valid_to]</a>
                </div>
                <div class=\"package_price\">
                    LKR
                    <br><a class=\"p_price\">$row2[per_unit_price]</a>
                    <br>per unit
                </div>
            </div>
        ";
        
        }
    ?>
    </div>
              

            <div class="service_location">
                <label for="location">Location</label>
                <div class="location"></div>
            </div>



            <div class="user_reviews">
                <label>Review</label>
                <div class="review">
                    <div class="reviewer">
                        <img <?php srcIMG("avatar3.png") ?> alt="Avatar" class="profilePic">
                        <div class="name">
                            John
                            <br>Colombo
                        </div>
                    </div>
                    <div class="comment">
                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                        <a class="ratingPoints">4.0</a>
                        <br>
                        <p>We vistited this hotel the last month. The staff were very great and quality sevice,
                            so, the eat is varity and excelent , also the rooms were cleand and confort bed.
                            it has afantastic location for the people that visit the towon for work.
                            Will recomendet thes hotel for all persons that to travel this city.</p>
                    </div>
                </div>
                <div class="review">
                    <div class="reviewer">
                        <img <?php srcIMG("avatar1.png") ?> alt="Avatar" class="profilePic">
                        <div class="name">
                            Rocky
                            <br>Kandy
                        </div>
                    </div>
                    <div class="comment">
                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                        <a class="ratingPoints">4.0</a>
                        <br>
                        <p>We vistited this hotel the last month. The staff were very great and quality sevice,
                            so, the eat is varity and excelent , also the rooms were cleand and confort bed.
                            it has afantastic location for the people that visit the towon for work.
                            Will recomendet thes hotel for all persons that to travel this city.</p>
                    </div>
                </div>

            </div>
            
            <div class="social">
                <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                <div class="toReview">
                    <button>Review</button>
                </div>
            </div>

            <div class="reviewbody" >
                <div class="post">
                    <div class="text">Thanks for rating us!</div>
                    <div class="edit">EDIT</div>
                </div>
                <div class="star-widget">
                    <input type="radio" name="rate" id="rate-5">
                    <label for="rate-5" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-4">
                    <label for="rate-4" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-3">
                    <label for="rate-3" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-2">
                    <label for="rate-2" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-1">
                    <label for="rate-1" class="fas fa-star"></label>
                    <form action="#">
                        <header></header>
                        <div class="textarea">
                             <textarea cols="30" placeholder="Describe your experience.."></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Post</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
    </script>


    <?php linkJS("vendor/serviceCalendar"); ?>
    <?php linkJS("vendor/venuesANDhalls"); ?>
    <?php linkJS("vendor/vendorReview"); ?>
    <?php linkPhp("footer") ?>
</body>

</html>