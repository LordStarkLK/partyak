<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("howItWorkView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("footer");?>
    <title>How it work</title>
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
                           
                    <br>      
                    <p1>$row[description]</p1><br><br>



                    ";


                   }   
                ?>

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
                    <h1 class = "left-heading">More details for Vendors</h1>
                    <?php while($row = mysqli_fetch_assoc($data['vendor_details'])){
                    echo"
                    <h2>$row[heading]</h2>
                    <p1>$row[description]</p1><br><br>

                    <div id=\"$row[section_id]-modal\" class=\"modal myModal update-modal2\">    

                    </div>


                    ";


                   }   
                    ?>

                </div>

                <div class="morecustomer">
                    <h1 class = "left-heading">More details for Customer</h1>
                    <?php while($row = mysqli_fetch_assoc($data['customer_details'])){
                    echo"
                    <h2>$row[heading]</h2>

                    <p1>$row[description]</p1><br><br>

                    ";


                   }  
                   ?> 

                </div>

                <h1>Join With Us & Enjoy Your Day.</h1>

        </div>

    </div>

    </section>
    </div>
    
</body>
<!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

<?php linkPhp("footer") ?>
</html>