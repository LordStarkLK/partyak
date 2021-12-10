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
                <div class="service-box" >
                    <div class="service_type">
                        <img <?php srcIMG("feature img/hotel.png") ?> alt="Avatar" class="stype_img">
                        <a>Venues & Halls</a>
                    </div>
                    <div class="ser-details">
                        <div class="service_name"><a href="<?php echo BASEURL . '/spService'; ?>"1>Mount Lavinia Hotel</a></div>
                        <div class="location_name">Colombo, Sri Lanka</div>
                    </div>
                    
                    <div class="curr_status">
                        <i class="fa fa-pause-circle-o fa-2x" aria-hidden="true" style="color: rgb(37, 228, 53);"></i>
                        <a>Pending</a>
                    </div>
                    <div class="action">
                        <a>Delete Service</a>
                    </div>
                </div>
                <div class="service-box">
                <div class="service_type">
                        <img <?php srcIMG("feature img/hotel.png") ?> alt="Avatar" class="stype_img">
                        <a>Caterings</a>
                    </div>
                    <div class="ser-details">
                        <div class="service_name"><a href="#">Nilwala Caterings</a></div>
                        <div class="location_name">Matara, Sri Lanka</div>
                    </div>
                    <div class="curr_status">
                        <i class="fa fa-pause-circle-o fa-2x" aria-hidden="true" style="color: rgb(37, 228, 53);"></i>
                        <a>Pending</a>
                    </div>
                    <div class="action">
                        <a>Delete Service</a>
                    </div>
                </div>
                <div class="service-box">
                <div class="service_type">
                        <img <?php srcIMG("feature img/hotel.png") ?> alt="Avatar" class="stype_img">
                        <a>Decorations</a>
                    </div>
                    <div class="ser-details">
                        <div class="service_name"><a href="#">Lassana Flora</a></div>
                        <div class="location_name">Colombo, Sri Lanka</div>
                    </div>
                    
                    <div class="curr_status">
                        <i class="fa fa-pause-circle-o fa-2x" aria-hidden="true" style="color: rgb(37, 228, 53);"></i>
                        <a>Pending</a>
                    </div>
                    <div class="action">
                        <a>Delete Service</a>
                    </div>
                </div>
                <!-- <div class="service-box">
                <div class="service_type">
                        <img <?php srcIMG("feature img/hotel.png") ?> alt="Avatar" class="stype_img">
                        <a>Venues & Halls</a>
                    </div>
                    <div class="service_name"><a href="#">Mount Lavinia Hotel</a></div>
                    <div class="location_name">Colombo, Sri Lanka</div>
                    <div class="curr_status">
                        <i class="fa fa-pause-circle-o fa-2x" aria-hidden="true" style="color: rgb(37, 228, 53);"></i>
                        <a>Pending</a>
                    </div>
                    <div class="action">
                        <a>Delete Service</a>
                    </div>
                </div> -->
                
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