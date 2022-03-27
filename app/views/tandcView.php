<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("tandc"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <title>Document</title>
</head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>

    <div class="container">
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
            

        </div>
        <div class=\"content-container content\">
        <p id=\"content\">
        $row[content]

        </p>

        </div>
        </div>
        
        ";
    }
    
    
    
    ?>








    





</div>

    </div>

<!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>    
    
</body>
<?php linkPhp("footer") ?>
</html>