<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <?php linkCSS("vendor/venuesANDhalls"); ?> -->
    <?php linkCSS("eventplanner/epServices"); ?>
    <?php linkCSS("vendor/serviceCalendar"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <?php linkCSS("home-new"); ?> -->
    <?php linkCSS("navigation"); ?>
    <!-- <?php linkCSS("customerNavigation"); ?> -->
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
    <div class="top-img">
        <img <?php srcIMG("hotel/hotel1.jpg"); ?> id="top-img">
    </div>
    <div class="second-section">
        <div class="left-section">
            <div class="head-deatils">
                <h3 class="pink-text">Event Planner</h3><br>
                <h1 id="service-name"><?php echo $data['service']['service_name'] ?> </h1>
                <h2 id="service-location"><?php echo $data['service']['service_location'] ?> </h2>
            </div>
            <div class="supported-events detils-section">
                <p id="title-texts">supported events</p><br>

                <div class="row">
                    <?php
                    $etype = explode(',', $data['service']['event_type']);
                        foreach ($etype as $value) {
                            if ($value == 'wedding') { ?>
                                <div class="column">
                                <img src="http://localhost/partyak/public/img/feature img/wedding-couple.png" alt="Avatar" class="feature_img">
                                <a id=>Weddings</a>
                            </div>
                            <?php }
                            elseif ($value == 'party') { ?>
                                <div class="column">
                                <img src="http://localhost/partyak/public/img/feature img/celebrating.png" alt="Avatar" class="feature_img">
                                <a>Parties/Festivals</a>
                            </div>
                            <?php }
                            elseif ($value == 'cooperative') { ?>
                                <div class="column">
                                <img src="http://localhost/partyak/public/img/feature img/meeting.png" alt="Avatar" class="feature_img">
                                <a>Coorperative events</a>
                            </div>
                            <?php }
                        } ?>
                </div>
            </div>
            <div class="additional-info">
                <div class="details_row">
                    <div class="title">
                        <label class="pink-text">Payment Conditions</label>
                    </div>
                    <div class="details">
                            <?php echo $data['service']['payment_terms_and_conditions']?>
                    </div>
                </div>
                <div class="details_row">
                <div class="title">
                    <label class="pink-text">Cancelletion Terms</label>
                </div>
                <div class="details">
                            <?php echo $data['service']['cancellation_policy']?>
                    </div>
            </div>
            <div class="details_row">
                <div class="title">
                    <label class="pink-text">Additional Information</label>
                </div>
                <div class="details">
                    *Initial discount: <?php echo $data['service']['initial_discount']."%. Discount for first ". $data['service']['initial_count']." Bookings"?>
                    <br>*Preparation time: <?php echo $data['service']['preparation_time']?>
                </div>
            </div>
            </div>
        </div>
        <div class="right-section">
            <div class="request-container">
                <div class="right_side">
                        <div class="request_container">
                                <form action="<?php echo BASEURL . '/epOnlyService/bookingDet/'.$data['service']['service_id']; ?>" class="form-area" method="POST">
                                        Reserve For
                                    <div class="reserve_price">
                                        <div class="price">
                                            <?php echo $data['service']['advance_price']." ".''; ?>
                                        </div>
                                        <div class="lkr">
                                            LKR
                                        </div>
                                    </div>
                                        <div class="form-input-rows">
                                            <div class="reserve_details">
                                                <div class="row">
                                                        <div class="col_name">
                                                            <label>Event type</label>
                                                        </div>
                                                        <div class="col_input">
                                                            <select id="eType" name="eventType">
                                                                <option value="Wedding">Wedding</option>
                                                                <option value="Party">Party/Festival</option>
                                                                <option value="Cooperative event">Cooperative event</option>
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
                                                <div class="row">
                                                    <div class="col_name">
                                                        <label>Pick your date</label>
                                                    </div>
                                                    <div class="col_input">
                                                        <input type="date" id="sname" name="reservedate" placeholder>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                        <div class="row-form">
                                            <div class="request">
                                                    <button type="submit" id="submitid"  value="Submit">Request Service</button>
                                            </div><br>
                                            <div class="notice">
                                                    *After requesting service you will recive vendor response and then you can confirm the payment
                                            </div><br>
                                            <div class="message">
                                                    <button>Send Message</button>
                                            </div>
                                        </div>
                        </form>
                 </div>
             </div>
                    </div>
                    <div class="calendar">
                        <div class="month">
                            <i class="fa fa-angle-left prev" aria-hidden="true"></i>
                            <div class="date">
                                <h1>March</h1>
                                <p></p>
                            </div>
                            <i class="fa fa-angle-right next" aria-hidden="true"></i>
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
                        <div class="days"><div class="prev-date">27</div><div class="prev-date">28</div><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div class="today">24</div><div>25</div><div>26</div><div>27</div><div>28</div><div>29</div><div>30</div><div>31</div><div class="next-date">1</div><div class="next-date">2</div></div>
                    </div>
        </div>
                    </div>
                    <div class="review-section">
        <h1>Reviews</h1>
        <div class="latest-review">
                                <div class="latest-review-card">
                        <h1 class="rate">3<p>stars</p></h1>
                        <h3 class="review-text">"Nice hotel with classy look both outside and inside. Hotel is nice and clean and well maintained. Has spacious function hall,stairs and corridors. One side of the hotel faces ocean.
"</h3>
                    </div>
                                <div class="latest-review-card">
                        <h1 class="rate">4<p>stars</p></h1>
                        <h3 class="review-text">"Magnificent hotel wonderfully located right on the edge of the ocean. The staff could not have been nicer. The buffet-style food was delicious and offered a huge choice. Probably the best hotel experience we have ever had."</h3>
                    </div>
                    </div>
        <h1 class="your-review">Your Review</h1>
                        <div class="userReview">
                    <h1 class="userRate">
                        4 Stars                    </h1>
                    <p>"
                        Magnificent hotel wonderfully located right on the edge of the ocean. The staff could not have been nicer. The buffet-style food was delicious and offered a huge choice. Probably the best hotel experience we have ever had.                        "
                    </p>
                </div>
                <div class="reviewbody">
                    <div class="review-stars">
                        <i class="fas fa-star fa-2x" data-index="0" aria-hidden="true" style="color: white;"></i>
                        <i class="fas fa-star fa-2x" data-index="1" aria-hidden="true" style="color: white;"></i>
                        <i class="fas fa-star fa-2x" data-index="2" aria-hidden="true" style="color: white;"></i>
                        <i class="fas fa-star fa-2x" data-index="3" aria-hidden="true" style="color: white;"></i>
                        <i class="fas fa-star fa-2x" data-index="4" aria-hidden="true" style="color: white;"></i>
                    </div>
                    <form action="http://localhost/partyak/spService/alterReview/30" class="form-area" method="POST">
                        <input id="ratedStars" type="hidden" name="ratedIndex">
                        <input type="hidden" name="user_id" value="20 ">
                        <input class="text-area" type="text" name="review" placeholder="Leave your review...">
                        <div class="toReview">
                            <button type="submit" class="btn" value="Submit">Change Review</button>
                        </div>
                    </form>
                </div>

            </div>

    <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>        

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <?php linkJS("vendor/spService"); ?>
    <?php linkJS("vendor/serviceCalendar"); ?>
    <?php linkJS("vendor/venuesANDhalls"); ?>
    <?php linkJS("vendor/vendorReview"); ?>
</body>