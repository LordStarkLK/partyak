<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <meta charset="UTF-8">

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminRequest"); ?>
    
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>

<body>
    <div class="container">
        <?php linkPHP("adminSidebar");?>
        <section class="home-section">

            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
                <span class="dashboard">SERVICES</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("adminrequest.png") ?> width="50"
                                height="50">
                            <div class="box-topic">services</div>
                        </span>

                    </div>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a>services</a></li>

                    </ul>
                </div>

                <div class="pill-nav">
                    <a class="active" href="">Requests</a>
                    <a href="<?php echo BASEURL . '/adminRequest/accepted' ?>">Accepted</a>    
                    <a href="<?php echo BASEURL . '/adminRequest/rejected' ?>">Rejected</a>


                </div>



                <div class="search">
                        <span class="text">   View users...</span>
                        <input type="text" name="search" placeholder="Enter service name to search...">
                        <button><i class="fas fa-search"></i></button>
                    </div>






                <ul class="breadcrumb">

                </ul>

                <div class="sales-boxes">

                    <table>
                        
                        <tr>
                            <th>Service Id</th>
                            <th>Service Name </th>
                            <th>Vendor Name</th>
                            <th>Service Type</th>
                            <th>Status</th>
                            <th>More Options</th>


                        </tr>

                        <?php
                        $x = 1;
                         while($row=mysqli_fetch_assoc($data['services'])){
                            $id_name = 'myDropdown';
                            $class_name = 'accept';
                            $status_name = 'status';
                            $row2 = mysqli_fetch_assoc($data['userId']);
        
                            $class_name .= $x;
                            $id_name .= $x; 
                            $status_name .= $row['service_id'];
                            echo"
                                <tr>
                                    <td>$row[service_id]</td>
                                    <td>$row[service_name]</td>
                                    <td>$row2[f_name] $row2[l_name]</td>
                                    <td>$row[service_type]</td>
                                    <td class=$status_name> <i class=\"fas fa-circle pendot\"></i> $row[status]</td>
                                    <td>  
                                        <div class=\"btn-group\">
                                        <div class=\"dropdown\">
                                        <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change Status <i class=\"fas fa-caret-down\"></i></button>
                                        <div id=$id_name class=\"dropdown-content\">
                                        <a class=\"accept-btn $row[service_id]\">Accept</a>
                                        <a class=\"reject-btn $row[service_id]\">Reject</a>
                                        
                                        </div>
                                        </div>
                                        <button onclick=\"window.location=' " . BASEURL . "/spService/index/$row[service_id]'\">View Service page</button>
                                        </div>

    
                                    </td>

                                </tr>



                            ";
                            $x++;
                        }
                        ?>
                        <!-- <tr>
                            <td>01</td>
                            <td>JK photography</td>
                            <td>Photographer</td>
                            <td>
                            <i class="fas fa-circle pending"></i>  Pending
                            </td>
                            <td>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <?php
                                               $id_name = 'myDropdown';
        
                                               $x = 1;
                                               $id_name .= $x;
                                              echo"
                                              <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change Status <i class=\"fas fa-caret-down\"></i></button>
                                              <div id=$id_name class=\"dropdown-content\">
                                                <a href=\"#home\">Accept</a>
                                                <a href=\"#about\">Decline</a>
                                                
                                              </div>
                                              "; 
                                            
                                            ?>
                                    </div>
                                    <button>Delete</button>

                                </div>
                            </td>
                            

                        </tr>

                        <tr>
                        <td>02</td>
                            <td>Clarence Edwards</td>
                            <td>Musician</td>
                            <td>
                            <i class="fas fa-circle pending"></i>  Pending
                            </td>
                            <td>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <?php
                                               $id_name = 'myDropdown';
        
                                               $x = 2;
                                               $id_name .= $x;
                                              echo"
                                              <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change Status <i class=\"fas fa-caret-down\"></i></button>
                                              <div id=$id_name class=\"dropdown-content\">
                                                <a href=\"#home\">Accept</a>
                                                <a href=\"#about\">Decline</a>
                                                
                                              </div>
                                              "; 
                                            
                                            ?>
                                    </div>
                                    <button>Delete</button>

                                </div>
                            </td>
                            

                        </tr>

                        <tr>
                        <td>01</td>
                            <td>Blubery Hotel</td>
                            <td>Venue</td>
                            <td>
                            <i class="fas fa-circle pending"></i>  Pending
                            </td>
                            <td>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <?php
                                               $id_name = 'myDropdown';
        
                                               $x = 3;
                                               $id_name .= $x;
                                              echo"
                                              <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change Status <i class=\"fas fa-caret-down\"></i></button>
                                              <div id=$id_name class=\"dropdown-content\">
                                                <a href=\"#home\">Accept</a>
                                                <a href=\"#about\">Decline</a>
                                                
                                              </div>
                                              "; 
                                            
                                            ?>
                                    </div>
                                    <button>Delete</button>

                                </div>
                            </td>
                            

                        </tr> -->


                    </table>



        </section>
    </div>
    <?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>                        

    
    <?php linkJS("adminHomeView"); ?>
    <?php linkJS("admin/adminRequest"); ?>




</body>

</html>