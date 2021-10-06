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
                    <img class="cake-icon" <?php srcIMG("caek.png") ?> alt="cake icon">
                </div>
                <div class="descripton"></div>
                <div class="button request"></div>
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
            <h2 class="best-seller-h2">Best<br>Seller</h2>
        </div>
        <div class="column best-seller-icons">
            <table class="best-seller-table">
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
            </table>
        </div>
    </div>


</body>

</html>