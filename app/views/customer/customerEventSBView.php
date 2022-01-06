<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Event Schedule Board</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php linkCSS("customer/customerEventSBview"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <?php $eventname=$data['event'];?>
    <?php $serviceP=$data['service'];?>
   </head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>

    <div class="container">
        <div class="cusdetail">
            <div class="custopic">
                <div class="tab" >
                    <table>
                        <tr>
                            <th><i class="fas fa-user-plus"></i></th>
                            <?php echo "<th> $eventname[event_name] </th>"; ?>
                            <th><div class="eventdetails" id="eventb">
                                <button class="dropbtn">Event Details
                                    <i class="fa fa-caret-down"></i>
                                </button>
                            </div></th>
                            <th><a href="<?php echo BASEURL . '/customerEventSBRecep'; ?>">Recomndations of event planner</a></th>
                            <th><i class="fa fa-comments"></i></th>
                            <th>Boards</th>
                        </tr>
                    </table>
                </div>
                <div class="cusevent" id="service_det">
                    <table>
                        <div class="cusraw1">
                            <tr>
                                <th>Service Type</th>
                                <th>Service Details</th>
                            </tr>
                        </div>
                        <?php 
                           echo "<tr>";
                           echo "<td>Venues & Halls</td>";
                           if($serviceP['seating_arrangement'] != "no"){
                               echo"<td> Seating arrangement-$serviceP[seating_arrangement] <br>";
                           }
                        

                           if($serviceP['indoor_venue'] == "yes" && $serviceP['outdoor_venue'] == "yes"){
                            echo"<br> Venue type is indoor, outdoor both";
                           }
                           else if($serviceP['indoor_venue'] == "yes"){
                            echo"<br>Venue type is indoor venue."; 
                           }
                           else if($serviceP['outdoor_venue'] == "yes"){
                            echo"<br> Venue type is outdoor venue."; 
                           }else{
                            echo"<br> Venue type is not selected.";  
                           }


                           if($serviceP['seti_back'] == "yes"){
                               echo " <br> Seti back is want.";
                           }


                           if($serviceP['poruwa'] == "yes"){
                            echo "<br>Poruwa is want.";
                           }


                           if($serviceP['dancing_floor'] == "yes"){
                            echo "<br> Dancing floor is want.";
                           }
                           echo"</td>";
                           echo "</tr>";

                           echo "<tr>";
                           echo "<td>Catering Service</td>";

                           echo "<td> Meal Types-";

                           if($serviceP['breakfast'] == "yes"){
                            echo "<br> Breakfast";
                           }
                           if($serviceP['lunch'] == "yes"){
                            echo "<br> Lunch";
                           }
                           if($serviceP['dinner'] == "yes"){
                            echo "<br> Dinner";
                           }
                           if($serviceP['tea_time'] == "yes"){
                            echo "<br> Tea time";
                           }

                           if($serviceP['buffet'] == "yes"){
                            echo "<br> I want buffet set for my event.";
                           }

                           if($serviceP['no_of_servents'] != 0){
                            echo "<br> $serviceP[no_of_servents]";
                           }

                           echo "</td>";

                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Photographers</td>";
                           if($serviceP['estimated_budget_range'] != 0){
                            echo "<td> <br> $serviceP[estimated_budget_range]";
                           }

                           
                           if($serviceP['photo_shoot_details'] != "no"){
                            echo "<br> $serviceP[photo_shoot_details]";
                           }

                           echo "</td>";
                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Music</td>";

                           if($serviceP['music_band'] == "yes"){
                            echo "<td><br> I want music band for my event.";
                           }

                           if($serviceP['solo_singer'] == "yes"){
                            echo "<br> I want solo singer for my event.";
                           }

                           if($serviceP['dj'] == "yes"){
                            echo "<br> I want dj set for my event.";
                           }
  
                           echo "</td>";
                           echo "</tr>";

                           echo "<tr>";
                           echo "<td>Dancing Groups</td>";
                           echo "<td>Dance Types-";

                           if($serviceP['kandyan'] == "yes"){
                            echo "Kandyan";
                           }

                           if($serviceP['sabaragamuwa'] == "yes"){
                            echo "<br> Sabaragamuwa";
                           }

                           if($serviceP['low_country'] == "yes"){
                            echo "<br> Low country";
                           }

                           if($serviceP['western'] == "yes"){
                            echo "<br> Western";
                           }

                           echo "</td>";
                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Saloon</td>";

                           if($serviceP['saloon_type'] != "no"){
                            echo"<td> Salon type-$serviceP[saloon_type]";
                           }

                           if($serviceP['hair_style'] == "yes"){
                            echo"<br> I want hair style.";
                           }

                           if($serviceP['make_up'] == "yes"){
                            echo"<br> I want make up.";
                           }

                           if($serviceP['no_of_dressers'] != 0){
                            echo"<br> Number of dressers - $serviceP[no_of_dressers]";
                           }

                           echo "</td>";
                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Cake & Sweet</td>";

                           if($serviceP['wedding_cake'] == "yes"){
                            echo"<td> I want wedding cake.";
                           }

                           if($serviceP['party_cake'] == "yes"){
                            echo"<br> I want party cake.";
                           }

                           if($serviceP['sweet'] == "yes"){
                            echo"<br> I want sweets.";
                           }

                           echo "</td>";
                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>decorations</td>";

                           if($serviceP['setibackP'] == "yes"){
                            echo"<td> I want seti back & poruwa.";
                           }

                           if($serviceP['floral'] == "yes"){
                            echo"<br> I want floral arrangement.";
                           }

                           echo "</td>";
                           echo "</tr>";

                           echo "<tr>";
                           echo "<td>Sounds & Lightings</td>";

                           if($serviceP['sound_service'] == "yes"){
                            echo"<td> I want sound service.";
                           }

                           if($serviceP['lighting_service'] == "yes"){
                            echo"<br> I want lighting service.";
                           }

                           if($serviceP['indoor_event'] == "yes" && $serviceP['outdoor_event'] == "yes"){
                            echo"<br> Event environment is indoor, outdoor both";
                           }
                           else if($serviceP['indoor_event'] == "yes"){
                            echo"<br>Event environment is indoor venue."; 
                           }
                           else if($serviceP['outdoor_event'] == "yes"){
                            echo"<br> Event environment is outdoor venue."; 
                           }else{
                            echo"<br> Event environmente is not selected.";  
                           }

                           echo "</td>";
                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Dress Suppliers</td>";

                           if($serviceP['male_dress'] == "yes" && $serviceP['female_dress'] == "yes"){
                            echo"<td><br> I want both male and female dresses.";
                           }
                           else if($serviceP['male_dress'] == "yes"){
                            echo"<br>I want male dresses."; 
                           }
                           else if($serviceP['female_dress'] == "yes"){
                            echo"<br> I want male dresses."; 
                           }else{
                            echo"<br>Dress types are not selected.";  
                           }

                           echo "</td>";
                           echo "</tr>";

                        
                        ?>
                            <tr>
                                <td></td>
                                <td></td>      
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>      
                            </tr>
                                            
                    </table>
                </div>
            </div>

            
            <div class="cusbody">

                <div class="custodo">
                    <!-- <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>TO Do</th>
                                <th>5 Tasks</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>

                       </table>
                    </div> -->
                    <div class="wrapper">
                        <header>TO DO</header>
                        <div class="footer">
                            <span><span class="pendingTasks"></span> pending tasks <button>Clear All</button></span>

                        </div>
                        <div class="inputField">
                        <input type="text" placeholder="Add new task">
                        <button><i class="fas fa-plus"></i></button>
                        </div>
                        <ul class="todoList">

                        <!-- data are comes from local storage -->
                        </ul>
                    </div>

                </div>

                <div class="cusin">
                    <!-- <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>INPROGRESS</th>
                                <th>0 Task</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>
                        </table>
                    </div> -->
                    <div class="wrapper">
                        <header>INPROGRESS</header>
                        <div class="footer">
                            <span><span class="pendingTasks"></span> pending tasks <button>Clear All</button></span>

                        </div>
                        <div class="inputField">
                        <input type="text" placeholder="Add new task">
                        <button><i class="fas fa-plus"></i></button>
                        </div>
                        <ul class="todoList">
                        <!-- data are comes from local storage -->
                        </ul>
                    </div>
                   
                </div>

                <div class="cusdone">
                    <!-- <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>COMPLETED</th>
                                <th>0 Task</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>
                        </table>
                    </div> -->
                    <div class="wrapper">
                        <header>COMPLETED</header>
                        <div class="footer">
                            <span><span class="pendingTasks"></span> pending tasks <button>Clear All</button></span>

                        </div>
                        <div class="inputField">
                        <input type="text" placeholder="Add new task">
                        <button><i class="fas fa-plus"></i></button>
                        </div>
                        <ul class="todoList">
                        <!-- data are comes from local storage -->
                        </ul>
                    </div>
                   
                </div>

            </div>
        </div>

    </div>



</body>
<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?>
<?php linkJS("customer/customerEventSB"); ?>
<?php linkPhp("footer") ?>
</html>