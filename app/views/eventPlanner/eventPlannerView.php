<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php linkCSS("eventPlanner/eventPlanner"); ?>
    <?php linkCSS("vendor/serviceCalendar"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php linkCSS("home-new"); ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer"); ?>
    <title>Event planner</title>
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
        <div class="image_container">
            <img class="mySlides" <?php srcIMG("nekatha.jpg") ?> >
            <a href="https://youtu.be/pKtQ913aqP8"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>   
        </div>
        <div class="content">
            <div class="basic_details">
                <div class="left_side">
                    <div class="service_type">
                        <img <?php srcIMG("eventplanner.png") ?> alt="Avatar" class="stype_img">
                        <a>Event Planner</a>
                    </div>
                    <div class="service_name">Nekatha Event Planners</div>
                    <div class="location_name">Colombo, Sri Lanka</div>
                   
                    <p>
                        Innovative, Creative & Bespoke Nekatha Event Planners, based in Castle Street, Borella, Colombo 08, work with clients all over the Sri Lanka. 
                        Shenal Fernando & Lakshini Abeysinghe, Directors of Nekatha Event Planners has over 12 years experience in Event Management & Production. 
                        So We offer every Bride a Personal & Bespoke Wedding Consultancy & Planning Service and personally work with every Corporate & Individual Client to create Events that meet and exceed expectations.    
                    </p>
                    <div class="left_row  type1">
                        <a>Supported Events</a>
                        <div class="sub_row">
                            <div class="column">
                                <img <?php srcIMG("feature img/wedding-couple.png") ?> alt="Avatar" class="feature_img">
                                <a>Weddings</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="left_row type2">
                        <a>Service Areas</a>
                        <div class="sub_row">
                            <div class="column">
                                <img <?php srcIMG("sri lanka.png") ?> alt="Avatar" class="feature_img">
                                <a>Western province</a>
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="column">
                                <img <?php srcIMG("sri lanka.png") ?> alt="Avatar" class="feature_img">
                                <a>Southern province</a>
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="column">
                                <img <?php srcIMG("sri lanka.png") ?> alt="Avatar" class="feature_img">
                                <a>North Western province</a>
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="column">
                                <img <?php srcIMG("sri lanka.png") ?> alt="Avatar" class="feature_img">
                                <a>Sabaragamuwa province</a>
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="column">
                                <img <?php srcIMG("sri lanka.png") ?> alt="Avatar" class="feature_img">
                                <a>Central province</a>
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="column">
                                <img <?php srcIMG("sri lanka.png") ?> alt="Avatar" class="feature_img">
                                <a>Uva province</a>
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="column">
                                <img <?php srcIMG("sri lanka.png") ?> alt="Avatar" class="feature_img">
                                <a>North Central province</a>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="right_side">
                    <div class="request_container">
                        Reserve For
                        <div class="reserve_price">
                            <div class="price">
                                50,000
                            </div>
                            <div class="lkr">
                                LKR
                            </div>
                        </div>
                        <div class="reserve_details">
                            <div class="row">
                                    <div class="col_name">
                                        <label>Event type</label>
                                      </div>
                                      <div class="col_input">
                                        <select id="eType" name="eventType">
                                            <option value="Wedding">Wedding</option>
                                            <option value="Party/Festival">Party/Festival</option>
                                            <option value="Cooparate">Cooperative event</option>
                                            <option value="Personal">Personalize event</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="col_name">
                                        <label>Guest count</label>
                                      </div>
                                      <div class="col_input">
                                        <input type="text" id="sname" name="guestcount" placeholder>
                                      </div>
                                </div>
                            <!-- </div> -->
                            <div class="row">
                                <div class="col_name">
                                  <label >Pick your date</label>
                                </div>
                                <div class="col_input">
                                  <input type="date" id="sname" name="reservedate" placeholder>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col_name">
                                  <label >Pick your package</label>
                                </div>
                                <div class="col_input">
                                    <select id="pType" name="packageType">
                                        <option value="summer">Summer</option>
                                        <option value="Wedding">Big deal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="request">
                            <button>Request Service</button>
                        </div>
                        <div class="notice">
                            
                            *After requesting service you will recive vendor response and then you can confirm the payment 
                            
                        </div>
                        <div class="message">
                            <button>Send Message</button>
                        </div>
                    </div>
                    <div class="calendar_container">
                        <a class="name">Availability Calendar</a>

                        <div class="calendar">
                            <div class="month">
                              <i class="fa fa-angle-left prev"></i>
                              <div class="date">
                                <h1></h1>
                                <p></p>
                              </div>
                              <i class="fa fa-angle-right next"></i>
                            </div>
                            <div class="weekdays">
                              <div>Sun</div>
                              <div>Mon</div>
                              <div>Tue</div>
                              <div>Wed</div>
                              <div>Thu</div>
                              <div>Fri</div>
                              <div>Sat</div>
                            </div>
                            <div class="days"></div>
                          </div>


                    </div>
                </div>
            </div>
            <div class="additional_details">
                <div class="details_row">
                    <div class="title">
                        <label>Payment Conditions</label>
                    </div>
                    <div class="details">
                        Reserve the date by paying the reservation fee online on Partyak. 
                        The full payment have to be done one day prior to the event date.
                    </div>
                </div>
                <div class="details_row">
                    <div class="title">
                        <label>Cancelletion Terms</label>
                    </div>
                    <div class="details">
                        *Non-refundable Reservation Fee
                        <br>The reservation fee as listed in the box on the right with your payment details will not be refundable, 
                        any other payment made will be refundable if cancellation is made 2 weeks (14 days) prior to the (your event’s) scheduled time of commencement.
                        Example: If event starts on 31st December at 9AM (local time of Vendor), 
                        cancel before 9AM (local time of Vendor) on 17th December for a refund of any payments made excluding the reservation fee. 
                    </div>
                </div>
                <div class="details_row">
                    <div class="title">
                        <label>Additional Information</label>
                    </div>
                    <div class="details">
                        *Initial discount:  10% (discount for first bookings)
                    </div>
                </div>
            </div>
            <div class="allpackages">
                <!-- <label for="package">Packages</label> -->
                <div class="package">
                    <div class="package_content">
                        <label>Gold offer</label>
                        <div class="package_summary">
                            We are charging RS:100 000 to plan an event (Minor events wedding)
                            We are coordinating everything regarding the event.
                        </div>
                    </div>
                    <div class="package_price">
                        LKR
                        <br><a class="p_price">100000</a>
                        <br>fixed price
                    </div>
                </div>
            </div>
            <div class="service_location">
                <label for="location">Location</label>
                <div class="location">
                </div>
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
                        <p>We vistited this hotel the last mont. The staff were very great and quality sevice, 
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
                        <p>We vistited this hotel the last mont. The staff were very great and quality sevice, 
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

    <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

    <?php linkJS("vendor/serviceCalendar"); ?>
    <?php linkPhp("footer") ?>
    
</body>
</html>