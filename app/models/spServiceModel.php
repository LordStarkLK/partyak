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

        $query = "SELECT package_id FROM package WHERE package_name='$packageType'";
        $query = mysqli_query($GLOBALS['db'], $query);
        $result = mysqli_fetch_assoc($query);
        $packageId = $result['package_id'];
        // echo $packageId;

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO booking(customer_id, service_id, event_date,event_type,noOfGuest, package_id) 
        VALUES ('$id', '$service_id', '$reserveDate', '$eventType' , ' $guestCount', '$packageId')";
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
        $query = "SELECT *  FROM `service_review` WHERE `service_id`='$service_id' AND `user_id`='$id' ";
        $reviewStatusesult = mysqli_query($GLOBALS['db'], $query);
        if (mysqli_num_rows($reviewStatusesult) > 0) {
            return $reviewStatusesult;
        }
    }
    public function alterReview($ratedStars,  $textReview, $id, $service_id)
    {
        $query = "UPDATE `service_review`SET 'ratedStar'=$ratedStars,'textReview'=$textReview WHERE `service_id`='$service_id' AND `user_id`='$id';";

        mysqli_query($GLOBALS['db'], $query);
    }
    public function getLatestReview($service_id)
    {
        $latestReviewQuery = "SELECT *  FROM `service_review` WHERE `service_id`='$service_id' ORDER BY `Date` DESC LIMIT 2;";
        $reviewLatestreview = mysqli_query($GLOBALS['db'], $latestReviewQuery);
        if (mysqli_num_rows($reviewLatestreview) > 0) {
            return $reviewLatestreview;
        }
    }
}
