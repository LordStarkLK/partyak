<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminMarketing"); ?>
    <?php linkCSS("css/all"); ?>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <?php linkPHP("adminSidebar");?>
        <section class="home-section">

            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
                <span class="dashboard">MARKETING</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("marketingContent.png") ?>
                                width="40" height="40">
                            <div class="box-topic">Marketing</div>
                        </span>

                    </div>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a>Marketing</a></li>

                    </ul>

                    <div class="search-container">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Search Marketing.." name="search">

                            <button type="submit"><i class="fa fa-search"></i></button>
                            <!-- <i class="fas fa-search"></i> -->


                        </form>
                    </div>


                </div>



                <ul class="breadcrumb">

                </ul>

                <div class="sales-boxes">

                    <table>
                        <tr>
                            <th>content_id</th>
                            <th>Vendor Name</th>
                            <!-- <th>Title </th> -->
                            <th>Content</th>
                            <th>Status</th>
                            <th>More actions</th>

                        </tr>
                        <tr>
                            <?php
                                $x = 1;
                                while($row = mysqli_fetch_assoc($data['marketing'])){
                                    $row2 = mysqli_fetch_assoc($data['user']);
                                    $id_name = 'myDropdown';
                                    $status_name = 'status';
                                    $status_name .= $row['content_id'];

                                    $id_name .= $x;
                                    

                                    echo "
                                    <td>$row[content_id]</td>
                                    <td>$row2[f_name] $row2[l_name]</td>
                                    <td><a target=\"_blank\" href=\"http://localhost/partyak/public/img/marketingContent/$row[content]\"><img class=\"customer-image\" src=\"http://localhost/partyak/public/img/marketingContent/$row[content]\"  width=\"60\" height=\"60\">
                                    </a>
                                    </td>
                                    <td class=$status_name><i class=\"fas fa-circle $row[upload_status]\"></i> $row[upload_status]</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <div class=\"dropdown\">
                                            <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change Status <i class=\"fas fa-caret-down\"></i></button>
                                        <div id=$id_name class=\"dropdown-content\">
                                        <a class=\"accept-btn $row[content_id]\">Make online</a>
                                        <a class=\"reject-btn $row[content_id]\">Make Offline</a>
                                        
                                        </div>
                                        </div>
                                        <button>Delete Content</button>
                                        </div>

    
                                    </td>
                                    </tr>
                                    
                                    
                                    
                                    ";
                                    $x++;
                                }

                            ?>
                            <!-- <td>JK photography</td>
                            <td>photography is an art</td>
                            <td><img class="customer-image" <?php srcIMG("marketingad.jpg") ?> width="60" height="60">
                            </td>
                            <td><i class="fas fa-circle"></i> Online</td>
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
          <a href=\"#home\">Online</a>
          <a href=\"#about\">Offline</a>
          
        </div>
        "; 
    
    ?>
                                    </div>
                                    <button>Delete</button>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>JBA sounds</td>
                            <td>Best service you can trust!</td>
                            <td><img class="customer-image" <?php srcIMG("light&sounf.jpg") ?> width="60" height="60">
                            </td>
                            <td><i class="fas fa-circle" style="color: #ffa600"></i> Pending</td>
                            <td>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <?php
        $id_name = 'myDropdown';
        
         $x = 2;
         $id_name .= $x;
        echo"
        <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change status <i class=\"fas fa-caret-down\"></i></button>
        <div id=$id_name class=\"dropdown-content\">
          <a href=\"#home\">Online</a>
          <a href=\"#about\">Offline</a>
          
        </div>
        "; 
    
    ?>

                                    </div>
                                    <button>Delete</button>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Event Master</td>
                            <td>The master in event planning</td>
                            <td><img class="customer-image" <?php srcIMG("s-1575251602066.png") ?> width="60" height="60">
                            </td>
                            <td><i class="fas fa-circle" style="color: red"></i> Offline</td>
                            <td>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <?php
        $id_name = 'myDropdown';
        
         $x = 3;
         $id_name .= $x;
        echo"
        <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change status <i class=\"fas fa-caret-down\"></i></button>
        <div id=$id_name class=\"dropdown-content\">
          <a href=\"#home\">Online</a>
          <a href=\"#about\">Offline</a>
          
        </div>
        "; 
    
    ?>

                                    </div>
                                    <button>Delete</button>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Paps Catering</td>
                            <td>Catering at its best</td>
                            <td><img class="customer-image" <?php srcIMG("papscate.jpg") ?> width="60" height="60">
                            </td>
                            <td><i class="fas fa-circle"></i> Online</td>
                            <td>
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <?php
        $id_name = 'myDropdown';
        
         $x = 4;
         $id_name .= $x;
        echo"
        <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change status <i class=\"fas fa-caret-down\"></i></button>
        <div id=$id_name class=\"dropdown-content\">
          <a href=\"#home\">Online</a>
          <a href=\"#about\">Offline</a>
          
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
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/adminMarketing"); ?>                                
    <?php linkJS("adminHomeView"); ?>




</body>

</html>