<?php

class AddNewServiceModel extends Database
{
    
    public function addServiceDetails($id, $servName, $servDesc, $location, $serviceType, $eventType, $province, $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime, $simultaneousBooking, $cancellationPolicy, $tandc, $addiInfo, 
    $venueType, $standingCapacity, $seatingArr, $addFeature, 
    $meals, $attendantsNo, 
    $musicType,
    $danceType,
    $saloonType, $suppType,
    $cakeType, $sweetType,
    $decoType, $flowType,
    $sectionType, $dressCategory ,
    
    $caption, $video )
    
    
    // public function addServiceDetails($id, $servName, $servDesc, $location, $eventType, $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime,$simultaneousBooking, $cancellationPolicy, $tandc, $addiInfo, $caption, $video )
    
    {
        
        

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE user_id='$id' LIMIT 1"));
        $userId = $result["user_id"];

        
         $query = "INSERT INTO other_service(user_id, service_name, description, service_location, service_type, event_type, service_areas, fb_url, instagram_url, linkedin_url, advance_price, initial_discount, initial_count, preparation_time, simultaneous_booking, cancellation_policy, payment_terms_and_conditions, additional_information, 
         venue_type, standing_capacity, seating_arrangement, venue_features,
         meal_time, no_of_attendants, 
         music_provider_type,
         dancing_type_name,
         saloon_type, supplying_services,
         cake_type, sweet_type,
         decoration_type, floral_arrangement,
         dress_sections, dress_type,
         
         caption, video_url) 
        VALUES ('$id', '$servName', '$servDesc', '$location', '$serviceType', '$eventType', '$province', '$facebook', '$instagram', '$linkedin', '$rePrice', '$iniDiscount', '$count', '$prepaTime', '$simultaneousBooking', '$cancellationPolicy', '$tandc', '$addiInfo', 
        '$venueType', '$standingCapacity', '$seatingArr', '$addFeature', 
        '$meals', '$attendantsNo', 
        '$musicType',
        '$danceType',
        '$saloonType', '$suppType',
        '$cakeType', '$sweetType',
        '$decoType', '$flowType',
        '$sectionType', '$dressCategory' ,
        '$caption', '$video')";


    

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
}