<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminTandC"); ?>
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
                <span class="dashboard">T & C</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("t&c.png") ?> width="40"
                                height="40">
                            <div class="box-topic">Terms and conditions</div>
                        </span>

                    </div>

                </div>






            </div>
            <div class="container-tc">

                <div class="section-tc card">
                    <div class="title-container">
                        <h1 id="title" class="title">Terms and conditions</h1>

                    </div>
                    <div>
                        <p id="content" class="content">Partyak is an event management system which will provide opportunities for customers, service providers as well event planners to get their needs realized.
                            (subject to your compliance with the Terms and Conditions set forth below).
                            Please read these Terms and Conditions before using this platform.</p>
                    </div>



                </div>


                <?php 
                    
                    while($row = mysqli_fetch_assoc($data['tandc'])){
                        echo"

                        <div class=\"section-tc card\">
                        <div class=\"title-container\">
                            <h1 id=\"title\" class=\"title\">$row[title]</h1>
                            <button onclick=\"funcpassid($row[t_c_id])\"class=\"addnew-button myBtn\" id=\"$row[t_c_id]-btn\" style=\"vertical-align:middle\"><span><i
                                    class=\"fas fa-edit\"></i>
                            </span></button>

                        </div>
                        <div class=\"content-container content\">
                        <p id=\"content\">
                        $row[content]

                        </p>
                        <div id=\"$row[t_c_id]-modal\" class=\"modal myModal\">

                            <!-- Modal content -->
                            <div class=\"modal-content\">
                                <span id = \"$row[t_c_id]-close\" class=\"close\">&times;</span>
                                <div class=\"container\">
                                        <form action=\"/partyak/adminTandC\" method=\"POST\">
                                        <div class=\"row\">
                                            <div class=\"col-25\">
                                            <label for=\"fname\">Title: </label>
                                            </div>
                                            <div class=\"col-75\">
                                            <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Insert Title..\" value=\"$row[title]\">
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-25\">
                                            <label for=\"subject\">Content: </label>
                                            </div>
                                            <div class=\"col-75\">
                                            <textarea id=\"content\" name=\"content\" placeholder=\"Write something..\" style=\"height:200px\">$row[content]</textarea>
                                            </div>
                                            <input type = \"hidden\" name = \"id\" value = \"$row[t_c_id]\" />
                                        </div>
                                        <br>
                                        <div class=\"row\">
                                            <input type=\"submit\" value=\"Submit\">
                                        </div>
                                        </form>
                                        </div>
                                


                            </div>

                        </div>


                        </div>
                        </div>
                        
                        ";
                    }
                    
                    
                    
                    ?>





                <!-- <div class="title-container">
                        
                        <h1 id="title" class="title">General</h1>
                        <button class="addnew-button" id="myBtn" style="vertical-align:middle"><span><i
                                    class="fas fa-edit"></i>
                            </span></button>
                    </div>
                    <div class="content-container">

                        <p id="content">Advertisers and users are responsible for ensuring that advertising content,
                            text, images, graphics, video ("Content") uploaded for inclusion on ikman complies with all
                            applicable laws. ikman & Saltside Technologies AB assumes no responsibility for any
                            illegality or any inaccuracy of the Content.

                            The advertisers and user guarantees that his or her Content do not violate any copyright,
                            intellectual property rights or other rights of any person or entity, and agrees to release
                            ikman and Saltside Technologies AB from all obligations, liabilities and claims arising in
                            connection with the use of (or the inability to use) the service.

                            Advertisers agree that their Content can may be presented through ikman's partner sites
                            under the same terms and conditions as on ikman.</p>


                        <div id="myModal" class="modal">

                            
                            <div class="modal-content">
                                <span class="close">&times;</span>



                            </div>

                        </div>
                    </div> -->





                <button class="addnew" id="myBtn" style="vertical-align:middle" onclick="addnew()"><span>Add new Section
                    </span></button>

                    <div id="myModal" class="modal">

                            
                            <div class="modal-content">
                                <span class="close" id="close">&times;</span>
                                <div class="container">
                                        <form action="<?php echo BASEURL . '/adminTandC'; ?>" method="POST">
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















        </section>
    </div>


    <?php linkPhp("notification"); ?>
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>

    <?php linkJS("adminHomeView"); ?>
    <?php linkJS("admin/adminTandC"); ?>




</body>

</html>