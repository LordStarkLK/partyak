<?php

class SpServiceModel extends Database
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
            return $result;
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

    public function bookingDetail($eventType, $guestCount, $reserveDate, $packageType, $id, $service_id)
    {
        // echo $packageType;

        $query = "SELECT package_id,per_unit_price, fixed_price FROM package WHERE package_name='$packageType'";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $packageId = $result['package_id'];
        $pricePerUnitId = $result['per_unit_price'];
        $fixedPrice = $result['fixed_price'];
        
        if ($pricePerUnitId > 0){
            $fullPayment = $guestCount*$pricePerUnitId;
        }else{
            $fullPayment =  $fixedPrice;
        }

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO booking(customer_id, service_id, event_date,event_type,noOfGuest, package_id,full_payment) 
        VALUES ('$id', '$service_id', '$reserveDate', '$eventType' , ' $guestCount', '$packageId','$fullPayment')";
        mysqli_query($GLOBALS['db'], $query);
    }
    public function insertReview($textReview, $ratedStars, $id, $service_id)
    {
        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO `service_review` (`service_id`, `user_id` , `ratedStar`, `textReview`) 
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
