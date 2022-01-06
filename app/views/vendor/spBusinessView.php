<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php linkCSS("vendor/spBusiness");  ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("footer");?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php linkPhp("navigation") ?>
    </header>
    <div class="container">
        <div class="content">
            <div class="services-container">

                <?php while($row=mysqli_fetch_assoc($data['business'])) {
                    
                    $i=1;
                    echo " 
                    <div class=\"service-box\" >";
                    
                    if($row['service_type'] == "venues_halls" ){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/hotel.png\"  class=\"stype_img\">
                            <a>Venues & Halls</a>
                        </div>";
                    }
                    elseif($row['service_type'] == "catering"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/catering.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Catering</a>
                        </div>";
                    } 
                    elseif($row['service_type'] == "cakes"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/chocolate-cake.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Cakes and Sweets</a>
                        </div>";
                    } 
                    elseif($row['service_type'] == "dancing"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/couple-dancing.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Dancing groups</a>
                        </div>";
                    }
                    elseif($row['service_type'] == "dresses"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/costume-clothes.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Dresses</a>
                        </div>";
                    }
                    elseif($row['service_type'] == "musical"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/band.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Musical</a>
                        </div>";
                    }
                    elseif($row['service_type'] == "photography"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/camera.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Photography</a>
                        </div>";
                    }
                    elseif($row['service_type'] == "saloon"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/beauty-saloon.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Saloon</a>
                        </div>";
                    }
                    elseif($row['service_type'] == "sounds_lightings"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/disco-ball.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Sounds and lightings</a>
                        </div>";
                    }
                    elseif($row['service_type'] == "eventPlanner"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/eventplanner.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Event Planner</a>
                        </div>";
                    }
                    elseif($row['service_type'] == "decoration"){
                        echo "
                        <div class=\"service_type\">
                            <img src=\"public/img/feature img/decoration.png\" alt=\"Avatar\" class=\"stype_img\">
                            <a>Decoration</a>
                        </div>";
                    }
                    echo "      
                        <div class=\"ser-details\">
                        
                            <div class=\"service_name\"><a href=\"".BASEURL . "/spPackage/index/$row[service_id]\">$row[service_name]</a></div>
                            <div class=\"location_name\">$row[service_location]</div>
                        </div>";
                    
                    if($row['status'] == "accepted"){
                        echo "
                        <div class=\"curr_status accept\">
                            <i class=\"fa fa-check-circle-o fa-2x\" aria-hidden=\"true\" ></i>
                            <a>Accept</a>
                        </div>";
                    }  
                    elseif($row['status'] == "reject"){
                        echo "
                        <div class=\"curr_status reject\">
                            <i class=\"fa fa-times-circle-o fa-2x\" aria-hidden=\"true\" ></i>
                            <a>Reject</a>
                        </div>";
                    }
                    elseif($row['status'] == "pending"){
                        echo "
                        <div class=\"curr_status pending\">
                            <i class=\"fa fa-pause-circle-o fa-2x\" aria-hidden=\"true\" ></i>
                            <a>Pending</a>
                        </div>";
                    }  

                    echo "
                        <div class=\"action\">
                            <a>Delete Service</a>
                        </div>
                    </div>
                    ";

                }
                ?>
            
            </div>
            <div class="addingService">
               <a href="<?php echo BASEURL . '/addNewService'; ?>"><button>ADD NEW SERVICE</button></a>
            </div>
            <div class="common-func">
                <a href="<?php echo BASEURL . '/spAnalytics'; ?>">
                    <div class="funcBox box1">Analytics</div>
                </a>
                <a href="<?php echo BASEURL . '/spWallet'; ?>">
                    <div class="funcBox box2">Wallet</div>
                </a>
                <a href="<?php echo BASEURL . '/spMarketing'; ?>">
                    <div class="funcBox box3">Marketing</div>
                </a>
                
            </div>
        </div>
    </div>
    <?php linkPhp("footer") ?>
</body>
</html>