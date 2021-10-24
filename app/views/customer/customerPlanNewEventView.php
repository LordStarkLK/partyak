<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php linkCSS("customer/customerPlanNewEvent"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
</head>

<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>


    <div class="container">
    <div class="container">
        <div class="container-asOwn">
            <div class="glass-asOwn">
                <!-- <img class="imgBlobLeft" src="../../public/images/rightblob.png" alt="blob left" > -->
                <img class="owni" <?php srcIMG("vendor.png") ?> alt="pick vendor image">
            </div>
            <div class="button-asOwn">
                <button type="button" class="buttonOwn" name="Own" > <a href ="<?php echo BASEURL . '/customerOnYourOwnPlan'; ?>"> On Your Own Planning</a></button>
                
                <!-- <input type="submit" value="Register" class="button"> -->
            </div>
        </div>
        <div class="container-asEp">
            <div class="glass-asEp">
                <!-- <img class="imgBlobRight" src="../../public/images/leftblob.png" alt="blob right" > -->

                <img class="thni" <?php srcIMG("riding.png") ?> alt="pick customer image">
            </div>
            <div class="button-asEp" >
                <button type="button" class="buttonEp" name="Ep"> <a href ="<?php echo BASEURL . '/customerThroughEpPlan'; ?>"> Thorugh Event Planner Planning</a></button>
            </div>
        </div>
    </div>

    <div class="cus"></div>
    <div class="cusContent">
        <div class="cusDetail">
            <p1>Hello......,<br><br>
We give two ways to plan your event and manage it very easily<br><br>
These are the two ways we provide you.<br>
     1. On your own planning<br>
     2. Through evenet planner palnning<br><br>
On your own planning<br></p1>
   <p2>When you use this option you can plan & manage your event on your own.<br><br>    

   These are the steps you havent follow.<br>
         1. Fill the quik access form for service types   which you want abd  give your event                     
              details  & submit.<br>           
         2. After that maintain the given Event Shedule Board & you can add service through
              this bord.<br><br></p2>

<p3>Through event planner planning.<br></p3> 
     <p4>When you use this option you can plan & manage your event with  planner.<br><br>

     These ara the steps you have to follow.<br>
          1. Fill the qiuck access for service types which and give your event details & save.<br>  
          2. After that select event planner  & request.<br> 
          3. Then they accept your request  & they add you to Event Shedule  Board with his 
              service  recommendation.<br>           
          4. Theb nanage  your event very meaningfully with event  planner.<br><br></p4>

<p5>Follow those ways  & make you event very delightful.<br></p5>
        </div>

    </div>
</div>

<?php linkPhp("footer") ?>
    
</body>
</html>