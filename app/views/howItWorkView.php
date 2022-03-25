<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("howItWorkView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
    <title>Document</title>
</head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>

    <div class="container">
        <div class="howcontent">
            <div class="intro">
                <?php while($row = mysqli_fetch_assoc($data['intro'])){
                    echo"
                    <h1>$row[heading]</h1><br>
                    <p1>$row[description]</p1><br><br>

                    ";


                   }   
                ?>
            </div>
                <h1>Life is an event. Make it memorable.</h1><br><br>
                <p1>Online event management system which provides platform for<br>
                    Users to search and hire event related service providers and event planners.<br>
                    Event related service providers and event planners to offer their services.<br><br>

                    Wide variety of services being offered and opportunity for a customer to organize and keep track of the event through the website.
                    </p1>

                    <p2>Everything right from your screen<br></p2>
                    <p22>Event planning will never be scary and overwhelming again when you can plan and monitor your entire event from your screen.<br><br></p22>

                    <p21>Plan your next event in Sri Lanka from anywhere anytime.<br>
                    Your Booklu Planboard will help you keep things organized from your theme colours to vendors to your team member tasks progress.</p21><br><br>

                    <p3>Partyak offers you following unique features</p3><br><br>
                    
                    

                    <br> <p36><p34>Event planning feature</p34><br><br><p35>Enables to hire event planner and service providers from one flow(Event planner recommendations included). Here the user gets to create an event. Then that user can hire event planner and service provider from one flow.
                        When event planner is integrated to the event that is been created. Event planner can give recommendations about service providers in the system then after hiring them.All the hired vendors can work cooperatively towards getting the event organized successfully.</p36></p35>
                    <br><br>

                    <p34>Quick access browsing feature</p34><br><p35> Pathway to browse service providers efficiently(Questionnaire type)This is a browsing method where we ask some event related questions to get an idea about the event that they want to get organized and the service that they want. Then the system gives a filtered list of services and they can hire the service providers they prefer.</p35>

                    <p34>Event schedule board</p34> <p35>Upgraded kanban board style to do list to organize events efficiently. Which Shows the processes not started yet, in progress and completed.Through this you can keep track of the processes in an event and from the processes list service providers can also be added. When services are added then the board will be accessible to all the vendors including event planners and they can work together in the board successfully towards the completion of that event.</p35>

                    <p36><p34>Quick notification feature</p34><br><br><p35>Urgent messages to be sent as notifications through the website. </p35><br><br><br><br>

                    <p4>Plan any event in 4 steps<br><br></p4>
                    <p6>Event planning shouldn’t be so much work.Because with Partyak now you can plan any event just in 4 steps.<br><br></p6>
                    <img  class="how" <?php srcIMG("how.png") ?> alt="Chance Flowers">


                    <p7>More details for Vendors</p7><br><br>
                    <p8>Vendor Service</p8><br>
                    <p9>After the vendor service verification process done by the system admin your service will be published in the system.</p9><br><br>

                    <p8>Marketing content</p8><br>
                    <p9>When you uploading marketing content first of all admin should accept it & then the vendor should do the payment for marketing content. After the payemnt the marketing content will be published</p9><br><br>

                    <p8>Vendor Payment</p8><br>
                    <p9>The system will be pay your payment per monthly. Venodr can request vendor payment when your wallet total ballance checked and other wise the system retrict you to do request payment.</p9><br><br>

                    <p8>Intruction for event planner for contributing customer event planning</p8><br>
                    <p9>After customer requesting, event planner can accept the requesting and recommand services for event and maintain event schedule board with customer</p9><br><br><br>
                    
                    <p7>More details for customer</p7><br><br>
                    <p8>Customer payment</p8><br>
                    <p9>When the customer book the vendor service the customer should do the revation payment and after that the service will reserve for customer. The reservation payament consiste of vendor advanced payment and & system service charge (3% of reservation price of service) Customer should pay the full payment the prior the event day.</p9><br><br>
                    
                    <br><br><br><p5>Join With Us & Enjoy Your Day.</p5>

                
            
        </div>
    </div>
    
</body>
<?php linkPhp("footer") ?>
</html>