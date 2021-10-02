<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <title>Home</title>

    <?php linkCSS("home"); ?>
    <?php linkCSS("navigation"); ?>
</head>


<body>
    
    
    <?php linkPhp("navigation") ?>
    
    
    
    
    
    <div class= "top-container">

    
    <div class="container">

        <div class="left">
            <div class="test">
                <label>Life is an event.<br>Make it memorable.</label><br><br>
                <div class="button">
                    <input type="button" value="Search Vendor">
                </div>
            </div>
            <!--<div class="scroll">
                    <input type="button" value="Scroll">
                 </div>-->
        </div>
        <div class="right">
            <div class="glass">
                <div class="box">
                    <lable><br>cake bakery<br><br></lable>
                    <img <?php srcIMG("caek.png") ?> alt="Cake Vector">
                </div>
                <lable>
                    <br>We are a bake-house offering<br> services for custom bake orders<br> including cakes etc.We accpet all<br> the kinds of events including<br> weddings, birthday parties and<br> cooperate events. Send a request<br> for reservations.<br><br>
                </lable>
                <img <?php srcIMG("Group 6.png") ?> alt="Request Vector">
            </div>
        </div>
        
    </div>
    <?php linkPhp("footer") ?>

    </div>

    

</body>

</html>