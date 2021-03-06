<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    

    <?php linkCSS("home-new"); ?>
    <?php linkCSS("navigation"); ?>
    <?php linkCSS("footer"); ?>
</head>


<body>

    <header>
        <?php linkPhp("navigation") ?>
        <?php if(isset($data["status"])){
        echo "
        <div class=\"successful\">
        <div class=\"success-items\">
            <div class=\"success-content\">
                Your Password has been successfully changed
            </div>
            <div class=\"success-icon\">
                <span class=\"close\">&times;</span>
            </div>
        </div>

    </div>
        ";
        }?>
    </header>
    <div class="container section1">
        <div class="left column">
            <div class="content-left">
                <h1 class="quote">
                    Life is an event.<br>
                    Make it memorable.
                </h1>
                <button class="search-vendor">Search Vendors</button>
            </div>

        </div>
        <div class="right column">
            <img class="home-blob" <?php srcIMG("home-blob.png") ?> alt="home blob">
            <div class="glass glass-phone">
                <div class="hamburger-menu">
                    <img class="hamburger-png" <?php srcIMG("hamburger-menu.png") ?>>
                </div>
                <div class="glass inner-glass">
                    <h2 class="cake-bakery-name">cake bakery</h2>
                    <img class="cake-icon" <?php srcIMG("caek.png") ?> alt="cake icon">
                    <img class="stars-img" <?php srcIMG("stars.png") ?> alt="stars icon">
                </div>
                <div class="descripton">
                    <p class="seller-description">We are a bake-house offering services for custom bake orders including cakes etc.
                        We accpet all the kinds of events including weddings, birthday parties and cooperate events. Send a request for reservations.
                    </p>
                </div>
                <img class="request-icon" <?php srcIMG("request.png") ?> alt="request icon">
            </div>

        </div>
    </div>
    <div class="container section2" id="slideshow-example" data-component="slideshow">
       <div role="list"> <!-- 1035x400 imgs -->
    <?php if(isset($data['marketingContent'])){foreach ($data['marketingContent'] as $row) { ?>
         <div class="slide"><img name = "slide" class="marketin-imgs" <?php srcIMG("marketingContent/".$row['content']); ?>></div>
        <?php } }?>
        </div>
    </div>
    <div class="container section3">
        <div class="column best-seller-text">
            <h2 class="best-seller-h2">Best<br>Sellers</h2>
        </div>
        <div class="column best-seller-icons">
            <div class="vendor-span icon">
                <img class="best-seller vendor-icons" <?php srcIMG("logo-icons/galadari.circle.png") ?>>
                <img class="best-seller vendor-stars" <?php srcIMG("stars.png") ?>>
                <p class="seller-name">
                    GALADARI Hotel,<br>Colombo
                </p>
            </div>
            <div class="vendor-span icon">
                <img class="best-seller vendor-icons" <?php srcIMG("logo-icons/marians.circle.png") ?>>
                <img class="best-seller vendor-stars" <?php srcIMG("stars.png") ?>>
                <p class="seller-name">
                    MARIANS Band,<br>Negombo
                </p>
            </div>
            <div class="vendor-span icon">
                <img class="best-seller vendor-icons" <?php srcIMG("logo-icons/mv.circle.png") ?>>
                <img class="best-seller vendor-stars" <?php srcIMG("stars.png") ?>>
                <p class="seller-name">
                    MOUNT LAVINIA Hotel,<br>Mount Lavinia
                </p>
            </div>
            <div class="vendor-span icon">
                <img class="best-seller vendor-icons" <?php srcIMG("logo-icons/abba.circle.png") ?>>
                <img class="best-seller vendor-stars" <?php srcIMG("stars.png") ?>>
                <p class="seller-name">
                    ABBA International,<br>Panadura
                </p>
            </div>
            <br>
            <div class="vendor-span icon">
                <img class="best-seller vendor-icons" <?php srcIMG("logo-icons/cake.circle.png") ?>>
                <img class="best-seller vendor-stars" <?php srcIMG("stars.png") ?>>
                <p class="seller-name">
                    WASANA Bakers,<br>Horana
                </p>
            </div>
            <div class="vendor-span icon">
                <img class="best-seller vendor-icons" <?php srcIMG("logo-icons/flower.circle.png") ?>>
                <img class="best-seller vendor-stars" <?php srcIMG("stars.png") ?>>
                <p class="seller-name">
                    MAL Samayan,<br>Galle
                </p>
            </div>
            <div class="vendor-span icon">
                <img class="best-seller vendor-icons" <?php srcIMG("logo-icons/bar.circle.png") ?>>
                <img class="best-seller vendor-stars" <?php srcIMG("stars.png") ?>>
                <p class="seller-name">
                    ONESHOT,<br>Mount Lavinia
                </p>
            </div>
            <div class="vendor-span icon">
                <img class="best-seller vendor-icons" <?php srcIMG("logo-icons/dance.circle.png") ?>>
                <img class="best-seller vendor-stars" <?php srcIMG("stars.png") ?>>
                <p class="seller-name">
                    PUNSARA ROCKS,<br>Panadura
                </p>
            </div>
        </div>
    </div>
    <img class="section-3-end" <?php srcIMG("section-3-end.png") ?>>
    <div class="container section4">
        <h1 class="section4-header">
            Looking for a supplier?
        </h1>
        <div class="supplier-logo">
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/ring.png") ?>>
                <p class="supplier-name">Jewellery</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/balloon.png") ?>>
                <p class="supplier-name">Baloon</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/cake.png") ?>>
                <p class="supplier-name">Bakeries</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/flower.png") ?>>
                <p class="supplier-name">Florist</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/caterers.png") ?>>
                <p class="supplier-name">Caterers</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/invites.png") ?>>
                <p class="supplier-name">Invites</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/camera.png") ?>>
                <p class="supplier-name">Photography</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/drinks.png") ?>>
                <p class="supplier-name">Liquor Store</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/tailor.png") ?>>
                <p class="supplier-name">Tailor</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/dancer.png") ?>>
                <p class="supplier-name">Dancer</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/lights.png") ?>>
                <p class="supplier-name">Lights</p>
            </div>
            <div class="supplier">
                <img class="supplier-icon" <?php srcIMG("supplier-icon/guitar.png") ?>>
                <p class="supplier-name">Bands</p>
            </div>
        </div>
    </div>
    <?php 
        
        if(isset($data["user_id"])){
            linkPhp("notification");
        }
        
    ?>
    
    <?php linkJS("lib/jquery-3.6.0.min"); ?>
    <?php linkJS("admin/notification"); ?>

    <?php linkJS("home");?>
    <?php linkJS("marketing");?>
    <?php linkPhp("footer") ?>
</body>

</html>