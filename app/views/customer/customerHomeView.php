<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("customerHomeView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>
</head>

<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
        <?php if(isset($data["status"])){
        echo "
        <div class=\"successful\">
        <div class=\"success-items\">
            <div class=\"success-content\">
                Your Account has been Created Successfully
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
                    <p class="seller-description">We are a bake-house offering services for custom bake orders including
                        cakes etc.
                        We accpet all the kinds of events including weddings, birthday parties and cooperate events.
                        Send a request for reservations.
                    </p>
                </div>
                <img class="request-icon" <?php srcIMG("request.png") ?> alt="request icon">
            </div>

        </div>
    </div>
    <div class="container section2">
        <div class="ads-logo"><img class="ads-logo-img" <?php srcIMG("kingbury-ad-logo.png") ?> alt="logo"></div>
        <div class="ad-details">
            <img class="ad-details-img" <?php srcIMG("ad-details.png") ?>>
        </div>
        <div class="ad-imgs"><img class="ad-imgs-cards" <?php srcIMG("visacards.png") ?>></div>
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
    <?php linkJS("home");?>
    <?php linkPhp("footer") ?>
</body>

</html>