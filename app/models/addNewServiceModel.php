<?php

class AddNewServiceModel extends Database
{
    
    public function addServiceDetails($id, $servName, $servDesc,  $facebook, $instagram, $linkedin, $rePrice, $prepaTime, $tandc, $addiInfo, $caption, $video)
    {
        
        //Insert user data
        // $query = "INSERT INTO user(email, password, user_type) VALUES ('$email', '$password', 'vendor')";
        // mysqli_query($GLOBALS['db'], $query);

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE user_id='$id' LIMIT 1"));
        $userId = $result["user_id"];

        //Insert data to child tables of user - on_your_own_planning table
        // $query = "INSERT INTO other_service(user_id, service_name, description, payment_terms_and_conditions, additional_information, cancellation_policy, advance_price, preparation_time, initial_discount, simultanious_booking, caption,  music_provider_type) 
        // VALUES ('$userId', '$servicename', '$servicedescription', '$payment_tANDc' , '$additionalInfo', '$policy' , '$reservationprice', '$preparationtime', '$initialDiscount', '$simultaneous', '$caption', '$musictype' )";
        // mysqli_query($GLOBALS['db'], $query);
        // $query = "INSERT into students(id,name,age) VALUES('$userId','$studentName', '$studentAge') ";
         $query = "INSERT INTO other_service(user_id, service_name, description, fb_url, instagram_url, linkedin_url, advance_price, preparation_time, payment_terms_and_conditions, additional_information, caption, video_url) 
        VALUES ('$id', '$servName', '$servDesc',  '$facebook', '$instagram', '$linkedin', '$rePrice', '$prepaTime', '$tandc', '$addiInfo', '$caption', '$video')";
           if(mysqli_query($GLOBALS['db'], $query)){
               echo "file uploaded success!";
           }
           else{
               echo "uploading fail";
           }
        
    }
}