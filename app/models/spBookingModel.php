<?php

class SpBookingModel extends Database
{
    
    
    public function getRequestDetails($service_id){
        $query = "SELECT customer_id, service_id, package_id, event_date, event_type, noOfGuest, status FROM booking WHERE service_id='$service_id' ";

        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getCustomerName(){
        $query = "SELECT user.f_name, user.l_name FROM user,booking WHERE booking.customer_id = user.user_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getPackageData(){
        $query = "SELECT package.package_name FROM package,booking WHERE package.package_id=booking.package_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function acceptRequest($booking_id){
        $query = "UPDATE booking SET status = 'accept' WHERE booking_id='$booking_id'";
        mysqli_query($GLOBALS['db'],$query);
        
    }

    public function rejectRequest($booking_id){
        $query = "UPDATE booking SET status = 'reject' WHERE booking_id = '$booking_id'";
        mysqli_query($GLOBALS['db'],$query);
    }

}