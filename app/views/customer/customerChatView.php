<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("customer/customerChatView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
   </head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>
    <div class="container">
        <div class="content">
            <div class="sidebar">

                <div class="cusname">
                  <p>P.D.P.P. Rathnayake</p>
                </div>
               
                <div class="cusSearch">
                    <form class="cuse" action="#" method="POST">
                        <input type="text" name="search">
                        <button class="cusbtn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="chatlist">

                    <div class="profi">
                        <img <?php srcIMG("galadari.circle.png") ?> alt="Chance Flowers">
                    </div>

                    <div class="remsg">
                        <p>Hi I like to book </p>
                    </div>

                </div>

            </div>

            <div class="chatside">

               <table>
                   <tr>
                       <th>
                            <div class="sendlogo">
                                <img <?php srcIMG("galadari.circle.png") ?> alt="Chance Flowers"><p>Galadari Hotel, Colombo</p>
                            </div>
                       </th>

                       <!-- <th>
                            <div class="user">
                                <i class="far fa-user-circle" ></i>
                            </div>
                       </th> -->
                       
                   </tr>

                   <tr>
                       <th>
                       <div class="chats">
                            <div class="chatscreen"> 
                                
                                <div class="contain">
                                    <p>Hi, I like to book your ballroom hall for my wedding. I still don’t have a boyfriend but I like to book the hall anyway please let me do this. This is my only hope.</p>
                                    <span class="time-right">11:02</span>
                                </div>
  
                            </div>
                   </div>


                       </th>
                   </tr>
               </table>

               

            </div>
            
        </div>

    </div>
    <?php linkPhp("footer") ?>
</body>
</html>