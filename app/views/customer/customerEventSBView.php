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
                        <?php 
                          if($eventname['plan_type']== "Through Event Planner"){
                            echo"<th><a href=\" ".BASEURL ." /customerEventSBRecep/index/$eventname[planning_id]\">Recomndations of event planner</a></th>";
                          }
                        ?>
                      </tr>
                    </table>
                </div>
                
<!-- Customer service preference -->
                <div class="cusevent" id="service_det">
                    <table>
                        <div class="cusraw1">
                            <tr>
                                <th>Service Type</th>
                                <th>Service Details</th>
                            </tr>
                        </div>
                        <?php
                          if($eventname['plan_type'] == "Through Event Planner"){
                            echo "<tr>";
                            echo "<td>Venues & Halls</td>";
                            echo" <td>";
                            if($serviceP['venue_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            if($serviceP['seating_arrangement'] == "yes"){
                              echo"<br><br>Seating arrangement - $serviceP[seating_arrangement]";
                            }
                            else{
                              echo"<br><br>Seating arrangement - Not slected.";
                            }
                          

                            if($serviceP['indoor_venue'] == "yes" && $serviceP['outdoor_venue'] == "yes"){
                              echo"<br><br> Venue type is indoor, outdoor both.";
                            }
                            else if($serviceP['indoor_venue'] == "yes"){
                              echo"<br><br>Venue type - Indoor venue."; 
                            }
                            else if($serviceP['outdoor_venue'] == "yes"){
                              echo"<br><br> Venue type - Outdoor venue."; 
                            }else{
                              echo"<br><br> Venue type - ";  
                            }


                            if($serviceP['seti_back'] == "yes"){
                              echo " <br><br> Seti back is want.";
                            }
                            else{
                              echo " <br> <br>Seti back - ";
                            }


                            if($serviceP['poruwa'] == "yes"){
                              echo "<br><br>Poruwa is want.";
                            }
                            else{
                              echo " <br> <br>Poruwa - ";
                            }



                            if($serviceP['dancing_floor'] == "yes"){
                              echo "<br><br> Dancing floor is want.";
                            }
                            else{
                              echo " <br><br> Dancing floor - ";
                            }
                            echo"</td>";
                            echo "</tr>";


                            echo "<tr>";
                            echo "<td>Catering Service</td>";
                            echo" <td>";

                            if($serviceP['catering_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            echo "<br><br> Meal Types-";

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
                              echo "<br><br> I want buffet set for my event.";
                            }

                            if($serviceP['no_of_servents'] != 0){
                              echo "<br><br>No of servents -  $serviceP[no_of_servents]";
                            }

                            echo "</td>";

                            echo "</tr>";


                            echo "<tr>";
                            echo "<td>Photographers</td>";
                            echo "<td>";
                            if($serviceP['photo_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            if($serviceP['estimated_budget_range'] != 0){
                              echo "<br><br> Estimated budget range -  $serviceP[estimated_budget_range]";
                            }
                            else{
                              echo "<br><br> Estimated budget range - Not mentioned.";
                            }

                            
                            if($serviceP['photo_shoot_details'] != "no"){
                              echo "<br><br>Photo shoot details - $serviceP[photo_shoot_details]";
                            }
                            else{
                              echo "<br><br>Photo shoot details - Not mentioned. ";
                            }

                            echo "</td>";
                            echo "</tr>";


                            echo "<tr>";
                            echo "<td>Music</td>";
                            echo" <td>";

                            if($serviceP['music_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            echo "<br><br> Music type - ";
                            if($serviceP['music_band'] == "yes"){
                              echo "<br> I want music band for my event.";
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
                            echo" <td>";

                            if($serviceP['dance_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            echo "<br><br>Dance Types -";

                            if($serviceP['kandyan'] == "yes"){
                              echo "<br>Kandyan";
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

                            echo "<td>";

                            if($serviceP['salon_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            if($serviceP['saloon_type'] != "no"){
                              echo"<br><br>Salon type - $serviceP[saloon_type]";
                            }

                            if($serviceP['hair_style'] == "yes"){
                              echo"<br><br> I want hair style.";
                            }

                            if($serviceP['make_up'] == "yes"){
                              echo"<br><br> I want make up.";
                            }

                            if($serviceP['no_of_dressers'] != 0){
                              echo"<br><br> Number of dressers - $serviceP[no_of_dressers]";
                            }

                            echo "</td>";
                            echo "</tr>";


                            echo "<tr>";
                            echo "<td>Cake & Sweet</td>";
                            echo" <td>";

                            if($serviceP['cake_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            echo "<br><br>Cake & sweetes type -" ;
                            if($serviceP['wedding_cake'] == "yes"){
                              echo"<br>I want wedding cake.";
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
                            echo" <td>";

                            if($serviceP['deco_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            echo "<br><br>Decoration details - ";
                            if($serviceP['setibackP'] == "yes"){
                              echo"<br> I want seti back & poruwa.";
                            }

                            if($serviceP['floral'] == "yes"){
                              echo"<br> I want floral arrangement.";
                            }

                            echo "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>Sounds & Lightings</td>";
                            echo" <td>";

                            if($serviceP['sound_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            echo "<br><br>Sound & lighting details - ";
                            if($serviceP['sound_service'] == "yes"){
                              echo"<br>I want sound service.";
                            }

                            if($serviceP['lighting_service'] == "yes"){
                              echo"<br> I want lighting service.";
                            }

                            if($serviceP['indoor_event'] == "yes" && $serviceP['outdoor_event'] == "yes"){
                              echo"<br><br> Event environment is indoor, outdoor both.";
                            }
                            else if($serviceP['indoor_event'] == "yes"){
                              echo"<br><br>Event environment is indoor venue."; 
                            }
                            else if($serviceP['outdoor_event'] == "yes"){
                              echo"<br><br> Event environment is outdoor venue."; 
                            }else{
                              echo"<br><br> Event environmente is not selected.";  
                            }

                            echo "</td>";
                            echo "</tr>";


                            echo "<tr>";
                            echo "<td>Dress Suppliers</td>";

                            echo "<td>";

                            if($serviceP['dressers_handle_EP'] == "yes"){
                              echo"This service is needed to be handle by event planner.";
                            }

                            if($serviceP['male_dress'] == "yes" && $serviceP['female_dress'] == "yes"){
                              echo"<br><br>I want both male and female dresses.";
                            }
                            else if($serviceP['male_dress'] == "yes"){
                              echo"<br><br>I want male dresses."; 
                            }
                            else if($serviceP['female_dress'] == "yes"){
                              echo"<br><br>I want male dresses."; 
                            }else{
                              echo"<br><br>Dress types are not selected.";  
                            }

                            echo "</td>";
                            echo "</tr>";
                          
                          
                          }else{
                            echo "<tr>";
                           echo "<td>Venues & Halls</td>";
                           if($serviceP['seating_arrangement'] == "yes"){
                            echo"<td> Seating arrangement - $serviceP[seating_arrangement]";
                           }
                           else{
                            echo"<td> Seating arrangement - Not slected.";
                           }
                        

                           if($serviceP['indoor_venue'] == "yes" && $serviceP['outdoor_venue'] == "yes"){
                            echo"<br><br> Venue type is indoor, outdoor both.";
                           }
                           else if($serviceP['indoor_venue'] == "yes"){
                            echo"<br><br>Venue type - Indoor venue."; 
                           }
                           else if($serviceP['outdoor_venue'] == "yes"){
                            echo"<br><br> Venue type - Outdoor venue."; 
                           }else{
                            echo"<br><br> Venue type - ";  
                           }


                           if($serviceP['seti_back'] == "yes"){
                            echo " <br><br> Seti back is want.";
                           }
                           else{
                            echo " <br> <br>Seti back - ";
                           }


                           if($serviceP['poruwa'] == "yes"){
                            echo "<br><br>Poruwa is want.";
                           }
                           else{
                            echo " <br> <br>Poruwa - ";
                           }



                           if($serviceP['dancing_floor'] == "yes"){
                            echo "<br><br> Dancing floor is want.";
                           }
                           else{
                            echo " <br><br> Dancing floor - ";
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
                            echo "<br><br> I want buffet set for my event.";
                           }

                           if($serviceP['no_of_servents'] != 0){
                            echo "<br><br>No of servents -  $serviceP[no_of_servents]";
                           }

                           echo "</td>";

                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Photographers</td>";
                           echo "<td>";
                           if($serviceP['estimated_budget_range'] != 0){
                            echo "Estimated budget range -  $serviceP[estimated_budget_range]";
                           }
                           else{
                            echo "Estimated budget range - Not mentioned.";
                           }

                           
                           if($serviceP['photo_shoot_details'] != "no"){
                            echo "<br><br>Photo shoot details - $serviceP[photo_shoot_details]";
                           }
                           else{
                            echo "<br><br>Photo shoot details - Not mentioned. ";
                           }

                           echo "</td>";
                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Music</td>";

                           echo "<td> Music type - ";
                           if($serviceP['music_band'] == "yes"){
                            echo "<br> I want music band for my event.";
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
                           echo "<td>Dance Types -";

                           if($serviceP['kandyan'] == "yes"){
                            echo "<br>Kandyan";
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

                           echo "<td>";

                           if($serviceP['saloon_type'] != "no"){
                            echo"Salon type - $serviceP[saloon_type]";
                           }

                           if($serviceP['hair_style'] == "yes"){
                            echo"<br><br> I want hair style.";
                           }

                           if($serviceP['make_up'] == "yes"){
                            echo"<br><br> I want make up.";
                           }

                           if($serviceP['no_of_dressers'] != 0){
                            echo"<br><br> Number of dressers - $serviceP[no_of_dressers]";
                           }

                           echo "</td>";
                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Cake & Sweet</td>";

                           echo "<td>Cake & sweetes type -" ;
                           if($serviceP['wedding_cake'] == "yes"){
                            echo"<br>I want wedding cake.";
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

                           echo "<td>Decoration details - ";
                           if($serviceP['setibackP'] == "yes"){
                            echo"<br> I want seti back & poruwa.";
                           }

                           if($serviceP['floral'] == "yes"){
                            echo"<br> I want floral arrangement.";
                           }

                           echo "</td>";
                           echo "</tr>";

                           echo "<tr>";
                           echo "<td>Sounds & Lightings</td>";

                           echo "<td>Sound & lighting details - ";
                           if($serviceP['sound_service'] == "yes"){
                            echo"<br>I want sound service.";
                           }

                           if($serviceP['lighting_service'] == "yes"){
                            echo"<br> I want lighting service.";
                           }

                           if($serviceP['indoor_event'] == "yes" && $serviceP['outdoor_event'] == "yes"){
                            echo"<br><br> Event environment is indoor, outdoor both.";
                           }
                           else if($serviceP['indoor_event'] == "yes"){
                            echo"<br><br>Event environment is indoor venue."; 
                           }
                           else if($serviceP['outdoor_event'] == "yes"){
                            echo"<br><br> Event environment is outdoor venue."; 
                           }else{
                            echo"<br><br> Event environmente is not selected.";  
                           }

                           echo "</td>";
                           echo "</tr>";


                           echo "<tr>";
                           echo "<td>Dress Suppliers</td>";

                           echo "<td>";
                           if($serviceP['male_dress'] == "yes" && $serviceP['female_dress'] == "yes"){
                            echo"I want both male and female dresses.";
                           }
                           else if($serviceP['male_dress'] == "yes"){
                            echo"I want male dresses."; 
                           }
                           else if($serviceP['female_dress'] == "yes"){
                            echo"I want male dresses."; 
                           }else{
                            echo"Dress types are not selected.";  
                           }

                           echo "</td>";
                           echo "</tr>";
                          }
                          

                        ?>
                                            
                    </table>
                </div>
            </div>

            
            <div class="cusbody">


                <div class="cusdone">
                                    <!-- modal -->
                    <div class="modal" id="todo_form">
                      <div class="header">
                          <div class="title">Add Todo</div>
                          <button class="btn close-modal">&times;</button>
                      </div>

                      <form action='<?php echo BASEURL . "/customerEventSB/index/$eventname[planning_id]"; ?>' class="form_area" method="POST">
                        <div class="bodi">
                            <input type="text" id="todo_input" name="todo_input">
                            <input type="submit" value="Add Todo" >
                        </div>
                      </form>
                    </div>

                    <!-- todo -->
                    <div class="todo-container">
                      <div class="status" id="no_status">
                          <h1>No Status</h1>
                          <button id="add_btn" data-target-modal="#todo_form">+ Add Todo</button>
                          <?php
                              $i = 1;
                              while($todoP=mysqli_fetch_assoc($data['todoN']) ){
                                  echo "
                                  <div class=\"todo\" id = \"$todoP[task_id]\" draggable=\"true\" >
                            
                                    $todoP[task_name]
                                    <span class=\"close\" onclick=\"window.location=' " . BASEURL . "/customerEventSB/deleteTask/$todoP[task_id]/$eventname[planning_id]'\">&times;</span>
                                  </div>
                                    
                                  ";

 
                              
                                $i++;
                              }
                          ?>
                              
                      </div>
                      <div class="status" name="toDoStatus" id="todo">
                          <h1>TO DO</h1>
                          <?php
                              $i = 1;
                              while($inproP=mysqli_fetch_assoc($data['todoT']) ){
                                  echo "
                                  <div class=\"todo\" id = \"$inproP[task_id]\" draggable=\"true\" >
                            
                                    $inproP[task_name]
                                    <span class=\"close\">&times;</span>
                                  </div>
                                    
                                  ";

 
                              
                                $i++;
                              }
                          ?>
                      </div>
                      <div class="status" name="inprogressStatus" id="inProgress">
                        <h1>INPROGRESS</h1>
                        <?php
                              $i = 1;
                              while($inproP=mysqli_fetch_assoc($data['inproT']) ){
                                  echo "
                                  <div class=\"todo\" id = \"$inproP[task_id]\" draggable=\"true\" >
                            
                                    $inproP[task_name]
                                    <span class=\"close\">&times;</span>
                                  </div>
                                    
                                  ";

 
                              
                                $i++;
                              }
                        ?>
                      </div>
                      <div class="status" name="completedStatus" id="completed">
                        <h1>COMPLETED</h1>
                        <?php
                              $i = 1;
                              while($inproP=mysqli_fetch_assoc($data['comT']) ){
                                  echo "
                                  <div class=\"todo\" id = \"$inproP[task_id]\" draggable=\"true\" >
                            
                                    $inproP[task_name]
                                    <span class=\"close\">&times;</span>
                                  </div>
                                    
                                  ";

 
                              
                                $i++;
                              }
                        ?>
                      </div>
                    </div>

                    <div id="overlay"></div>

                    <script>
                        
                        const todos = document.querySelectorAll(".todo");
                        const all_status = document.querySelectorAll(".status");
                        let draggableTodo = null;

                        todos.forEach((todo) => {
                          todo.addEventListener("dragstart", dragStart);
                          todo.addEventListener("dragend", dragEnd);
                        });

                        function dragStart() {
                          draggableTodo = this;
                          setTimeout(() => {
                            this.style.display = "none";
                          }, 0);
                          console.log("dragStart");
                          
                        }

                        function dragEnd() {
                          draggableTodo = null;
                          setTimeout(() => {
                            this.style.display = "block";
                          }, 0);
                          console.log("dragEnd");
                          


                        }

                        all_status.forEach((status) => {
                          status.addEventListener("dragover", dragOver);
                          status.addEventListener("dragenter", dragEnter);
                          status.addEventListener("dragleave", dragLeave);
                          status.addEventListener("drop", dragDrop);
                        });

                        function dragOver(e) {
                          e.preventDefault();
                          //   console.log("dragOver");
                        }

                        function dragEnter() {
                          this.style.border = "1px dashed #ccc";
                          console.log("dragEnter");
                        }

                        function dragLeave() {
                          this.style.border = "none";
                          console.log("dragLeave");
                        }
                        status_change = null;

                        function dragDrop() {
                          this.style.border = "none";
                          this.appendChild(draggableTodo);
                          console.log("dropped");
                          let Status = this.id;
                          let task = draggableTodo.id;
                          console.log(task);
                          status_change(Status,task);
                          // console.log(Status);
                          
                          }

                        

                        /* modal */
                        const btns = document.querySelectorAll("[data-target-modal]");
                        const close_modals = document.querySelectorAll(".close-modal");
                        const overlay = document.getElementById("overlay");

                        btns.forEach((btn) => {
                          btn.addEventListener("click", () => {
                            document.querySelector(btn.dataset.targetModal).classList.add("active");
                            overlay.classList.add("active");
                          });
                        });

                        close_modals.forEach((btn) => {
                          btn.addEventListener("click", () => {
                            const modal = btn.closest(".modal");
                            modal.classList.remove("active");
                            overlay.classList.remove("active");
                          });
                        });

                        window.onclick = (event) => {
                          if (event.target == overlay) {
                            const modals = document.querySelectorAll(".modal");
                            modals.forEach((modal) => modal.classList.remove("active"));
                            overlay.classList.remove("active");
                          }
                        };

                        /* create todo  */
                        const todo_submit = document.getElementById("todo_submit");

                        todo_submit.addEventListener("click", createTodo);

                        function createTodo() {
                          const todo_div = document.createElement("div");
                          const input_val = document.getElementById("todo_input").value;
                          const txt = document.createTextNode(input_val);

                          todo_div.appendChild(txt);
                          todo_div.classList.add("todo");
                          todo_div.setAttribute("draggable", "true");

                          /* create span */
                          const span = document.createElement("span");
                          const span_txt = document.createTextNode("\u00D7");
                          span.classList.add("close");
                          span.appendChild(span_txt);

                          todo_div.appendChild(span);

                          no_status.appendChild(todo_div);

                          span.addEventListener("click", () => {
                            span.parentElement.style.display = "none";
                          });
                          //   console.log(todo_div);

                          todo_div.addEventListener("dragstart", dragStart);
                          todo_div.addEventListener("dragend", dragEnd);

                          document.getElementById("todo_input").value = "";
                          todo_form.classList.remove("active");
                          overlay.classList.remove("active");
                        }

                        const close_btns = document.querySelectorAll(".close");

                        close_btns.forEach((btn) => {
                          btn.addEventListener("click", () => {
                            btn.parentElement.style.display = "none";
                          });
                        });
</script>
                   
                </div>

            </div>
        </div>

    </div>



</body>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?>
<?php linkJS("customer/customerEventSB"); ?>
<?php linkPhp("footer") ?>
</html>