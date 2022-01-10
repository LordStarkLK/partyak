<?php
class CustomerProfileBookingModel extends database
{
    public function getBookingDetails($id){
        // $query = "SELECT * FROM booking WHERE customer_id='$id' ";
        // Hari 
        $query = "SELECT booking.*,other_service.service_name,other_service.service_type FROM booking,other_service WHERE booking.service_id = other_service.service_id AND booking.customer_id = '$id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }

    }


    public function getBookingDets($id){
        $query = "SELECT service_id FROM booking WHERE customer_id='$id' ";
        $service_id = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($service_id) >= 0){
            return $service_id;
        }

        $query = "SELECT service_name, service_type FROM other_service WHERE service_id='$service_id' ";
        $vendorDet = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($vendorDet) >= 0){
            return $vendorDet;
        }

    }



    // public function deleteEvent($planning_id){
    //     $query = "DELETE FROM event WHERE planning_id = '$planning_id'";
    //     $result = mysqli_query($GLOBALS["db"], $query);
    //     return $result;

    //     $query = "DELETE * FROM service_preferences WHERE planning_id = '$planning_id'";
    //     $service = mysqli_query($GLOBALS["db"], $query);
    //     return $service;
    // }

}