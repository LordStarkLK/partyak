<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php linkCSS("home-new"); ?>
    <?php linkCSS("navigation"); ?>
</head>


<body>
    <header>
        <?php linkPhp("navigation") ?>
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
    <div class="container section4">

    </div>

</body>

</html>