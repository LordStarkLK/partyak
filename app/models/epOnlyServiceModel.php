<?php

class epOnlyServiceModel extends Database
{
    public function getServiceInfo($service_id)
    {


        $query = "SELECT service_id, service_name, description, service_location, service_type, event_type, service_areas, fb_url, instagram_url, linkedin_url, advance_price, initial_discount, initial_count, preparation_time, simultaneous_booking, cancellation_policy, payment_terms_and_conditions, additional_information, 
         venue_type, standing_capacity, seating_arrangement, venue_features,
         meal_time, no_of_attendants, 
         music_provider_type,
         dancing_type_name,
         saloon_type, supplying_services,
         cake_type, sweet_type,
         decoration_type, floral_arrangement,
         dress_sections, dress_type,
         caption, video_url FROM other_service WHERE service_id='$service_id' ";



        $result = mysqli_query($GLOBALS['db'], $query);
        if (mysqli_num_rows($result) > 0) {
            $packageResult = mysqli_fetch_assoc($result);
            return $packageResult;
        }
    }


    public function getPackageInfo($service_id)
    {
        $query = "SELECT package_id,package_name, description, valid_from, valid_to, per_unit_price FROM package WHERE service_id='$service_id' ";
        $result = mysqli_query($GLOBALS['db'], $query);
        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }



    //Insert booking details from borwse booking
    public function bookingDetail($userId, $service_id,$reserveDate,$eventType, $guestCount)
    {

        //Select event planner payment
        $query = "SELECT epFixedPrice FROM other_service WHERE service_id='$service_id' ";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $epPay = $result['epFixedPrice'];

        //Insert booking
        $query = "INSERT INTO `booking`(`customer_id`, `service_id`, `event_date`, `event_type`, `noOfGuest`, `package_id`, `full_payment`, `status`, `planning_id`) 
        VALUES 
        ('$userId','$service_id','$reserveDate','$eventType','$guestCount','0','$epPay','pending','0')";
        mysqli_query($GLOBALS['db'], $query);

        //Notification
        $query = "SELECT f_name,l_name from user WHERE user_id='$userId'";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $fName = $result['f_name'];
        $lName = $result['l_name'];
        $query = "SELECT service_name from other_service WHERE service_id = '$service_id'";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $service_name = $result['service_name'];
                
        $description = "$fName $lName have requested the service of $service_name";
        
        $query = "INSERT INTO notifications(notification_type,heading,description,url,user_id,notification_status,date)
         VALUES ('booking_request','New Booking Request','$description','http://localhost/partyak/adminBookings','12','0',NOW())";
        mysqli_query($GLOBALS['db'], $query); 
    }



    //Get booking details with event planning
    public function bookingDetailWithEvent($reserveDate,$eventType, $guestCount, $id, $service_id,$userId,$planning_id)
    {
        //Select event planner payment
        $query = "SELECT epFixedPrice FROM other_service WHERE service_id='$service_id' ";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $epPay = $result['epFixedPrice'];
        echo $service_id;

        //Insert booking details
        $query = "INSERT INTO booking( event_date,event_type,noOfGuest,full_payment,customer_id, service_id,planning_id) 
        VALUES ( '$reserveDate', '$eventType' , ' $guestCount', '$epPay' ,'$id', '$service_id','$planning_id')";
        mysqli_query($GLOBALS['db'], $query);

        //Select recommand service payment
        $query="SELECT * FROM event_planner_new_note WHERE planning_id='$planning_id'";
        $query = mysqli_query($GLOBALS['db'], $query);
        
        
        while($result = mysqli_fetch_assoc($query)){
            if($result['customer_prefer_status'] == "accepted"){
                $epPay = $epPay + $result['full_pay_amount'];
            }

        }

        // echo $epPay;

        $query="UPDATE event_planner_new_note SET full_pay_amount='$epPay' WHERE planning_id='$planning_id" ;
        mysqli_query($GLOBALS['db'], $query);

        
        //Notification
        $query = "SELECT f_name,l_name from user WHERE user_id='$userId'";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $fName = $result['f_name'];
        $lName = $result['l_name'];
        $query = "SELECT service_name from other_service WHERE service_id = $service_id";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $service_name = $result['service_name'];
                
        $description = "$fName $lName have requested the service of $service_name";
        
        $query = "INSERT INTO notifications(notification_type,heading,description,url,user_id,notification_status,date)
         VALUES ('booking_request','New Booking Request','$description','http://localhost/partyak/adminBookings','12','0',NOW())";
        mysqli_query($GLOBALS['db'], $query); 
    }



    //Insert review

    public function insertReview($textReview, $ratedStars, $id, $service_id)
    {
        $query = "INSERT INTO 'service_revie' ('service_id', 'user_id' , 'ratedStar', 'textReview') 
        VALUES ('$service_id', '$id', '$ratedStars',  '$textReview');";

        mysqli_query($GLOBALS['db'], $query);
    }


    public function checkReviewStatus($service_id, $id)
    {
        $checkReviewQuery = "SELECT *  FROM `service_review` WHERE `service_id`='$service_id' AND `user_id`='$id' ";
        $reviewStatusResult = mysqli_query($GLOBALS['db'], $checkReviewQuery);
        $reviewArray = array();
        if ((mysqli_num_rows($reviewStatusResult) > 0)) {
            $i = 0;
            while ($reviewQuery = mysqli_fetch_assoc($reviewStatusResult)) {
                $data['textReview'] = $reviewQuery['textReview'];
                $data['ratedStar'] = $reviewQuery['ratedStar'];
                $reviewArray[$i] = $data;
                $i++;
            }
            return $reviewArray;
        } else {
            $reviewArray = null;
            return $reviewArray;
        }
    }


    public function alterReview($ratedStars, $textReview, $id, $service_id)
    {
        $query = "UPDATE `service_review` SET `ratedStar`='$ratedStars',`textReview`='$textReview' WHERE `service_id`='$service_id' AND `user_id`='$id';";

        mysqli_query($GLOBALS['db'], $query);
    }

    
    public function getLatestReview($service_id)
    {
        $latestReviewQuery = "SELECT *  FROM `service_review` WHERE `service_id`='$service_id' ORDER BY `Date` DESC LIMIT 2;";
        $reviewLatestreview = mysqli_query($GLOBALS['db'], $latestReviewQuery);
        $latestReviewArray = array();
        if ((mysqli_num_rows($reviewLatestreview) > 0)) {
            $i = 0;
            while ($latestReview = mysqli_fetch_assoc($reviewLatestreview)) {
                $data['textReview'] = $latestReview['textReview'];
                $data['ratedStar'] = $latestReview['ratedStar'];
                $latestReviewArray[$i] = $data;
                $i++;
            }
            return $latestReviewArray;
        } else {
            $latestReviewArray = null;
            return $latestReviewArray;
        }
    }
}