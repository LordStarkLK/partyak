<?php

class AddNewServiceModel extends Database
{
    
    public function addServiceDetails($id, $servName, $servDesc, $location, $serviceType, $eventType, $province, $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime, $simultaneousBooking, $cancellationPolicy, $tandc, $addiInfo, $imgNameNew,
    $venueType, $standingCapacity, $seatingArr, $addFeature, 
    $meals, $attendantsNo, 
    $musicType,
    $danceType,
    $saloonType, $suppType,
    $cakeType, $sweetType,
    $decoType, $flowType,
    $sectionType, $dressCategory ,
    
    $caption, $video,$epFixedPrice )
    
    
    // public function addServiceDetails($id, $servName, $servDesc, $location, $eventType, $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime,$simultaneousBooking, $cancellationPolicy, $tandc, $addiInfo, $caption, $video )
    
    {
        
        

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE user_id='$id' LIMIT 1"));
        $userId = $result["user_id"];

        
         $query = "INSERT INTO other_service(user_id, service_name, description, service_location, service_type, event_type, service_areas, fb_url, instagram_url, linkedin_url, advance_price, initial_discount, initial_count, preparation_time, simultaneous_booking, cancellation_policy, payment_terms_and_conditions, additional_information, image,
         venue_type, standing_capacity, seating_arrangement, venue_features,
         meal_time, no_of_attendants, 
         music_provider_type,
         dancing_type_name,
         saloon_type, supplying_services,
         cake_type, sweet_type,
         decoration_type, floral_arrangement,
         dress_sections, dress_type,
         
         caption, video_url,epFixedPrice) 
        VALUES ('$id', '$servName', '$servDesc', '$location', '$serviceType', '$eventType', '$province', '$facebook', '$instagram', '$linkedin', '$rePrice', '$iniDiscount', '$count', '$prepaTime', '$simultaneousBooking', '$cancellationPolicy', '$tandc', '$addiInfo', '$imgNameNew',
        '$venueType', '$standingCapacity', '$seatingArr', '$addFeature', 
        '$meals', '$attendantsNo', 
        '$musicType',
        '$danceType',
        '$saloonType', '$suppType',
        '$cakeType', '$sweetType',
        '$decoType', '$flowType',
        '$sectionType', '$dressCategory' ,
        '$caption', '$video' ,'$epFixedPrice')";
        
         
    


    

        //    if(mysqli_query($GLOBALS['db'], $query)){
        //        echo "file uploaded success!";
        //    }
        //    else{
        //        echo "uploading fail";
        //    }


        if(mysqli_query($GLOBALS['db'], $query)){
        
            return true;
        }
        else{
         return false;
         
        }
        
    }

    public function makeNotification($id,$servName,$serviceType){
        echo "Hi";
        $query = "SELECT f_name,l_name from user WHERE user_id='$id'";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $fName = $result['f_name'];
        $lName = $result['l_name'];
        $description = "$fName $lName have added a new service, They're waiting to be accepted.";
        // echo $description;
        
        $query = "INSERT INTO notifications(`notification_type`,`heading`,`description`,`url`,`user_id`,`notification_status`,`date`)
         VALUES ('new_service','New service added','A new service is created and waiting to be accepted','http://localhost/partyak/adminRequest','12','0',NOW());";
        mysqli_query($GLOBALS['db'], $query);
        
    }
}