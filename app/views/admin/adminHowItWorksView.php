<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminHowItWorks"); ?>
    <?php linkCSS("css/all"); ?>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />

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
                <span class="dashboard">How It Works</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing" onclick="window.location='<?php echo BASEURL . '/adminHowItWorks'; ?>'">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("how it works.png") ?> width="40"
                                height="40">
                            <div class="box-topic">How it works</div>
                        </span>

                    </div>


                </div>

               





            </div>
            
        <div class="content">
            <div class="howcontent">
                <div class="intro">
                <?php while($row = mysqli_fetch_assoc($data['intro'])){
                    echo"
                    <h1>$row[heading]</h1><br>
                    <p1>$row[description]</p1><br><br>

                    ";


                   }   
                    ?>
                </div>

                <div class="main_heading_unique">
                <?php $row = mysqli_fetch_assoc($data['main_heading_unique']);
                    echo"
                    <h1 class = \"left-heading\">$row[heading]</h1><br><br>

                    ";   
                    ?>
                </div>

                <div class="unique_features">
                <?php while($row = mysqli_fetch_assoc($data['unique_features'])){
                    echo"
                    <h2>$row[heading]</h2>
                    <button onclick=\"funcpassid($row[section_id])\"class=\"addnew-button myBtn\" id=\"$row[section_id]-btn\" style=\"vertical-align:middle\"><span><i
                                    class=\"fas fa-edit\"></i>
                            </span></button>
                           
                    <br>      
                    <p1>$row[description]</p1><br><br>
                    <div id=\"$row[section_id]-modal\" class=\"modal myModal update-modal\">    
                    <div class=\"modal-content\">
                                <span id = \"$row[section_id]-close\" class=\"close\">&times;</span>
                                <div class=\"container\">
                                        <form action=\"/partyak/adminHowItWorks/unique_features\" method=\"POST\">
                                        <div class=\"row\">
                                            <div class=\"col-25\">
                                            <label for=\"fname\">Title: </label>
                                            </div>
                                            <div class=\"col-75\">
                                            <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Insert a title..\" value=\"$row[heading]\">
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-25\">
                                            <label for=\"subject\">Content: </label>
                                            </div>
                                            <div class=\"col-75\">
                                            <textarea id=\"content\" name=\"content\" placeholder=\"Write something..\" style=\"height:200px\">$row[description]</textarea>
                                            </div>
                                            <input type = \"hidden\" name = \"id\" value = \"$row[section_id]\" />
                                        </div>
                                        <br>
                                        <div class=\"row\">
                                            <input type=\"submit\" value=\"Submit\">
                                        </div>
                                        </form>
                                        </div>
                                


                            </div>

                        </div>



                    ";


                   }   
                    ?>

                    <button class="addnew" id="myBtn" style="vertical-align:middle"
                     onclick="addnew()"><span>Add New Unique Feature
                    </span></button>

                    <div id="myModal" class="modal insert-modal">

                            
                            <div class="modal-content ">
                                <span class="close" id="close">&times;</span>
                                <div class="container">
                                        <form action="<?php echo BASEURL . '/adminHowItWorks/unique_features'; ?>" method="POST">
                                        <div class="row">
                                            <div class="col-25">
                                            <label for="fname">Title: </label>
                                            </div>
                                            <div class="col-75">
                                            <input type="text" id="title" name="title" placeholder="Insert Title..">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                            <label for="subject">Content: </label>
                                            </div>
                                            <div class="col-75">
                                            <textarea id="content" name="content" placeholder="Insert Content.." style="height:200px"></textarea>
                                            </div>
                                            <input type = "hidden" name = "id" value = "insert" />
                                        </div>
                                        <br>
                                        <div class="row">
                                            <input type="submit" value="Submit">
                                        </div>
                                        </form>
                                        </div>
                                


                            


                            </div>

                        </div>

            </div>


                </div>

                <div class="steps">
                <?php $row = mysqli_fetch_assoc($data['steps']);
                    echo"
                    <h1 class = \"left-heading\">$row[heading]</h1><br><br>
                    <p1>$row[description]</p1><br><br>
                    <img  class=\"how\" src=\"http://localhost/partyak/public/img/".$row['additional_info']."\"  alt=\"Chance Flowers\" width = \"900px\">


                    ";   
                    ?>
                </div>

                <div class="morevendor">
                    <h1>More details for Vendors</h1>
                    <?php while($row = mysqli_fetch_assoc($data['vendor_details'])){
                    echo"
                    <h2>$row[heading]</h2>
                    <button onclick=\"funcpassid($row[section_id])\"class=\"addnew-button myBtn\" id=\"$row[section_id]-btn\" style=\"vertical-align:middle\"><span><i
                                    class=\"fas fa-edit\"></i>
                            </span></button><br>
                    <p1>$row[description]</p1><br><br>

                    <div id=\"$row[section_id]-modal\" class=\"modal myModal update-modal2\">    
                    <div class=\"modal-content\">
                                <span id = \"$row[section_id]-close\" class=\"close\">&times;</span>
                                <div class=\"container\">
                                        <form action=\"/partyak/adminHowItWorks/unique_features\" method=\"POST\">
                                        <div class=\"row\">
                                            <div class=\"col-25\">
                                            <label for=\"fname\">Title: </label>
                                            </div>
                                            <div class=\"col-75\">
                                            <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Insert a title..\" value=\"$row[heading]\">
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-25\">
                                            <label for=\"subject\">Content: </label>
                                            </div>
                                            <div class=\"col-75\">
                                            <textarea id=\"content\" name=\"content\" placeholder=\"Write something..\" style=\"height:200px\">$row[description]</textarea>
                                            </div>
                                            <input type = \"hidden\" name = \"id\" value = \"$row[section_id]\" />
                                        </div>
                                        <br>
                                        <div class=\"row\">
                                            <input type=\"submit\" value=\"Submit\">
                                        </div>
                                        </form>
                                        </div>
                                


                            </div>

                        </div>


                    ";


                   }   
                    ?>

                    <button class="addnew" id="myBtn2" style="vertical-align:middle"
                     onclick="addnew2()"><span>Add New Detail for vendor
                    </span></button>

                    <div id="myModal2" class="modal insert-modal2">

                            
                            <div class="modal-content ">
                                <span class="close" id="close2">&times;</span>
                                <div class="container">
                                        <form action="<?php echo BASEURL . '/adminHowItWorks/vendorDetails'; ?>" method="POST">
                                        <div class="row">
                                            <div class="col-25">
                                            <label for="fname">Title: </label>
                                            </div>
                                            <div class="col-75">
                                            <input type="text" id="title" name="title" placeholder="Insert Title..">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                            <label for="subject">Content: </label>
                                            </div>
                                            <div class="col-75">
                                            <textarea id="content" name="content" placeholder="Insert Content.." style="height:200px"></textarea>
                                            </div>
                                            <input type = "hidden" name = "id" value = "insert" />
                                        </div>
                                        <br>
                                        <div class="row">
                                            <input type="submit" value="Submit">
                                        </div>
                                        </form>
                                        </div>
                                


                            


                            </div>

                        </div>

            </div>
                

                

                <div class="morecustomer">
                    <h1>More details for Customer</h1>
                    <?php while($row = mysqli_fetch_assoc($data['customer_details'])){
                    echo"
                    <h2>$row[heading]</h2>
                    <button onclick=\"funcpassid($row[section_id])\"class=\"addnew-button myBtn\" id=\"$row[section_id]-btn\" style=\"vertical-align:middle\"><span><i
                                    class=\"fas fa-edit\"></i>
                            </span></button><br>
                    <p1>$row[description]</p1><br><br>

                    <div id=\"$row[section_id]-modal\" class=\"modal myModal update-modal3\">    
                    <div class=\"modal-content\">
                                <span id = \"$row[section_id]-close\" class=\"close\">&times;</span>
                                <div class=\"container\">
                                        <form action=\"/partyak/adminHowItWorks/unique_features\" method=\"POST\">
                                        <div class=\"row\">
                                            <div class=\"col-25\">
                                            <label for=\"fname\">Title: </label>
                                            </div>
                                            <div class=\"col-75\">
                                            <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Insert a title..\" value=\"$row[heading]\">
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-25\">
                                            <label for=\"subject\">Content: </label>
                                            </div>
                                            <div class=\"col-75\">
                                            <textarea id=\"content\" name=\"content\" placeholder=\"Write something..\" style=\"height:200px\">$row[description]</textarea>
                                            </div>
                                            <input type = \"hidden\" name = \"id\" value = \"$row[section_id]\" />
                                        </div>
                                        <br>
                                        <div class=\"row\">
                                            <input type=\"submit\" value=\"Submit\">
                                        </div>
                                        </form>
                                        </div>
                                


                            </div>

                        </div>

                    ";


                   }   
                    ?>

                    <button class="addnew" id="myBtn" style="vertical-align:middle"
                     onclick="addnew()"><span>Add New detail for customer
                    </span></button>

                    <div id="myModal" class="modal insert-modal2">

                            
                            <div class="modal-content ">
                                <span class="close" id="close">&times;</span>
                                <div class="container">
                                        <form action="<?php echo BASEURL . '/adminHowItWorks/unique_features'; ?>" method="POST">
                                        <div class="row">
                                            <div class="col-25">
                                            <label for="fname">Title: </label>
                                            </div>
                                            <div class="col-75">
                                            <input type="text" id="title" name="title" placeholder="Insert Title..">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                            <label for="subject">Content: </label>
                                            </div>
                                            <div class="col-75">
                                            <textarea id="content" name="content" placeholder="Insert Content.." style="height:200px"></textarea>
                                            </div>
                                            <input type = "hidden" name = "id" value = "insert" />
                                        </div>
                                        <br>
                                        <div class="row">
                                            <input type="submit" value="Submit">
                                        </div>
                                        </form>
                                        </div>
                                


                            


                            </div>

                        </div>

            </div>
               

                <h1>Join With Us & Enjoy Your Day.</h1>



                    
                    
                    
                   

                
            </div>
        </div>
    
    














        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>
    <?php linkJS("admin/adminHowItWorks"); ?>




</body>

</html>