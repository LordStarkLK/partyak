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
                <span class="dashboard">REQUESTS</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("request.png") ?> width="50"
                                height="50">
                            <div class="box-topic">Requests</div>
                        </span>

                    </div>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a>Requests</a></li>

                    </ul>
                </div>


                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search vendor.." name="search">

                        <button type="submit"><i class="fa fa-search"></i></button>
                        <!-- <i class="fas fa-search"></i> -->


                    </form>
                </div>






                <ul class="breadcrumb">

                </ul>

                <div class="sales-boxes">

                    <table>
                        <tr>
                            <th>Vendor ID</th>
                            <th>Vendor Name </th>
                            <th>Vendor type</th>
                            <th>Status</th>
                            <th>More Options</th>


                        </tr>
                        <tr>
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
                            

                        </tr>


                    </table>



        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>