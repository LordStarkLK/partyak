<?php

class SpServiceModel extends Database
{

    public function getServiceInfo($service_id)
    {


        $query = "SELECT * FROM other_service WHERE service_id='$service_id' ";



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

    //Insert booking details
    public function bookingDetail($eventType, $guestCount, $reserveDate, $packageType, $id, $service_id,$userId)
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

        $query = "INSERT INTO booking(customer_id, service_id, event_date,event_type,noOfGuest, package_id,full_payment) 
        VALUES ('$id', '$service_id', '$reserveDate', '$eventType' , ' $guestCount', '$packageId','$fullPayment')";
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

    public function bookingDetailWithEvent($eventType, $guestCount, $reserveDate, $packageType, $id, $service_id,$userId,$planning_id)
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

        $query = "INSERT INTO booking(customer_id, service_id, event_date,event_type,noOfGuest, package_id,full_payment,planning_id) 
        VALUES ('$id', '$service_id', '$reserveDate', '$eventType' , ' $guestCount', '$packageId','$fullPayment','$planning_id')";
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


    //Get booking details for event planner the request coming from through planning event
    public function bookingDetEp($eventType, $guestCount, $reserveDate, $packageType, $id, $service_id,$userId)
    {
        
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

        $query = "INSERT INTO booking(customer_id, service_id, event_date,event_type,noOfGuest, package_id,full_payment) 
        VALUES ('$id', '$service_id', '$reserveDate', '$eventType' , ' $guestCount', '$packageId','$fullPayment')";
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
