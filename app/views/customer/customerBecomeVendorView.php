<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("customer/customerBecomeVendorView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <title>Document</title>
</head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>

    <div class="container">
        <div class="content">
            <!-- add new service popup -->
            <div id="addservicePopup" class="addservice_container">
            <!-- The Modal -->
            <div class="form_container">
                <div class="close-button"><span class="service_close">&times;</span></div>
                
                <form id="regForm" action="">

                    <h1>Service Registration</h1>
                    
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                    <div class="content_title"><a>Service Details:</a></div>
                        <div class="row">
                        <div class="col_name">
                            <label for="sname">Service Name</label>
                        </div>
                        <div class="col_input">
                            <input type="text" id="sname" name="servicename" placeholder="Your service name">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                            <label for="sdescription">Service Description</label>
                            </div>
                            <div class="col_input">
                            <textarea id="sdescription" name="servicedescription" placeholder="Description Here (visible for customers)" style="height:200px"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="sname">Service Type</label>
                            </div>
                            <div class="col_input">
                                <select id="country" name="country">
                                    <option value="cate">Catering</option>
                                    <option value="cakes">Cake and sweets</option>
                                    <option value="dancing">Dancing groups</option>
                                    <option value="deco">Decoration</option>
                                    <option value="dresses">Dresses</option>
                                    <option value="musical">Musical</option>
                                    <option value="photo">Photography</option>
                                    <option value="saloon">Saloon</option>
                                    <option value="usa">Sounds and lightings</option>
                                    <option value="vANDs">Venues and Halls</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="etype">Event Types</label>
                            </div>
                            <div class="col_input">
                                <input type="checkbox" id="et1" name="et1" value="wedd">
                                <label for="etype1"> Weddings</label><br>
                                <input type="checkbox" id="et2" name="et2" value="party">
                                <label for="etype2"> Parties/Festivals</label><br>
                                <input type="checkbox" id="et3" name="et3" value="coopE">
                                <label for="etype3"> Cooperate Events</label><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="sname">Service Privided Areas</label>
                            </div>
                            <div class="col_input">
                                <input type="checkbox" id="province1" name="province1" value="wedd">
                                <label for="p1"> Southern Province</label><br>
                                <input type="checkbox" id="province2" name="province2" value="wedd">
                                <label for="p2"> Western Province</label><br>
                                <input type="checkbox" id="province3" name="province3" value="wedd">
                                <label for="p3"> Sabaragamuwa Province</label><br>
                                <input type="checkbox" id="province1" name="province1" value="wedd">
                                <label for="p1"> Uva Province</label><br>
                                <input type="checkbox" id="province1" name="province1" value="wedd">
                                <label for="p1"> Central Province</label><br>
                                <input type="checkbox" id="province1" name="province1" value="wedd">
                                <label for="p1"> Eastern Province</label><br>
                                <input type="checkbox" id="province1" name="province1" value="wedd">
                                <label for="p1"> North western Province</label><br>
                                <input type="checkbox" id="province1" name="province1" value="wedd">
                                <label for="p1"> North Central Province</label><br>
                                <input type="checkbox" id="province1" name="province1" value="wedd">
                                <label for="p1"> Nouthern Province</label><br>
                            </div>
                        </div>
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
                    <!-- <p><input placeholder="First name..." oninput="this.className = ''"></p>
                    <p><input placeholder="Last name..." oninput="this.className = ''"></p> -->
                    </div>
                    
                    <div class="tab">
                    <div class="content_title"><a>Booking Setting Details:</a></div>

                    <div class="row">
                        <div class="col_name">
                            <label for="rprice">Reservation Price(LKR)</label>
                        </div>
                        <div class="col_input">
                            <input type="text" id="rprice" name="reservationprice" placeholder >
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col_name">
                            <label for="pretime">Preparation Time</label>
                        </div>
                        <div class="col_input">
                            <input type="text" id="pretime" name="preparationtime" placeholder>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col_name">
                        <label for="simultaneous">Simultaneous Booking</label>
                        </div>
                        <div class="col_input">
                        <input type="text" id="simultaneous" name="simultaneous_booking" placeholder="Your service name">
                        </div>
                    </div>
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
                    <div class="row">
                    <div class="col_name">
                        <label for="tANDc">Payment Terms and Conditions</label>
                    </div>
                    <div class="col_input">
                        <textarea id="tANDc" name="payment_tANDc" placeholder="Payment T&C" style="height:100px"></textarea>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col_name">
                        <label for="info">Additional Information</label>
                    </div>
                    <div class="col_input">
                        <textarea id="info" name="additionalInfo" placeholder="Additional information about booking" style="height:100px"></textarea>
                    </div>
                    </div>

                    </div>
                    
                    <div class="tab">
                    <div class="content_title"><a>Select Available Features:</a></div>

                    <div class="features">

                        <div class="venues">
                        <div class="row">
                            <div class="col_name">
                            <label for="vtype">Venue Type</label>
                            </div>
                            <div class="col_input">
                            <input type="radio" id="vt1" name="vt1" value="indoor">
                            <label for="vtype1"> Indoor</label><br>
                            <input type="radio" id="vt2" name="vt2" value="outdoor">
                            <label for="vtype2"> Outdoor</label><br>
                            <input type="radio" id="vt3" name="vt3" value="both">
                            <label for="vtype3"> Both</label><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                                <label for="capacity">Standing Capacity</label>
                            </div>
                            <div class="col_input">
                                <input type="text" id="capacity" name="standingcapacity" placeholder min="100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                            <label for="seating">Seating Arrangment</label>
                            </div>
                            <div class="col_input">
                            <input type="checkbox" id="sa1" name="sa1" value="banquet">
                            <label for="sa1"> Banquet</label><br>
                            <input type="checkbox" id="sa2" name="sa2" value="board">
                            <label for="sa2"> Board</label><br>
                            <input type="checkbox" id="sa3" name="sa3" value="classroom">
                            <label for="sa3"> Classroom</label><br>
                            <input type="checkbox" id="sa4" name="sa4" value="informal">
                            <label for="sa4"> Informal</label><br>
                            <input type="checkbox" id="sa5" name="sa5" value="oval">
                            <label for="sa5"> Oval</label><br>
                            <input type="checkbox" id="sa6" name="sa6" value="ushape">
                            <label for="sa6"> U shape</label><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col_name">
                            <label for="sname">Additional Features</label>
                            </div>
                            <div class="col_input">
                            <input type="checkbox" id="af1" name="af1" value="wifi">
                            <label for="feature1"> Wi fi</label><br>
                            <input type="checkbox" id="af2" name="af2" value="parking">
                            <label for="feature2"> Car Parking</label><br>
                            <input type="checkbox" id="af3" name="af3" value="reception">
                            <label for="feature3"> Reception area</label><br>
                            <input type="checkbox" id="af4" name="af4" value="setiback">
                            <label for="feature4"> Seti back</label><br>
                            <input type="checkbox" id="af5" name="af5" value="garden">
                            <label for="feature5"> Garden</label><br>
                            <input type="checkbox" id="af6" name="af6" value="smokingarea">
                            <label for="feature6"> Smoking area</label><br>
                            <input type="checkbox" id="af7" name="af7" value="dancingfloor">
                            <label for="feature7"> Dancing floor</label><br>
                            <input type="checkbox" id="af8" name="af8" value="poruwa">
                            <label for="feature8"> Poruwa</label><br>
                            </div>
                        </div>
                        </div>

                        



                    </div>
                    </div>
                    
                    <div class="tab">
                    <div class="content_title"><a>Image and caption:</a></div>

                    <div class="row">
                        <div class="col_name">
                        <label for="caption">Caption</label>
                        </div>
                        <div class="col_input">
                        <input type="text" id="caption" name="caption" placeholder="Add your service caption">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col_name">
                        <label for="simage">Image</label>
                        </div>
                        <div class="col_input">
                        <input type="file" id="simage" name="serviceimage"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col_name">
                        <label for="sdoc">Document</label>
                        </div>
                        <div class="col_input">
                        <input type="file" id="sdoc" name="servicedoc"><br><br>
                        </div>
                    </div>
                    </div>
                    
                    <div style="overflow:auto;">
                    <div style="float:right;">
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
                    </div>
                </div>
    
</body>
<?php linkPhp("footer") ?>
<?php linkJS("vendor/addService"); ?>
</html>