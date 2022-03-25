<?php
class CustomerProfileBookingModel extends database
{
    //Get booking details
    public function getBookingDetails($id){

        $query = "SELECT booking.*,other_service.service_name,other_service.service_type,,other_service.user_id,other_service.cancellation_policy FROM booking,other_service WHERE booking.service_id = other_service.service_id AND booking.customer_id = '$id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }

    }

    //Get payment details
    public function getPaymentDetails($id){

        $query = "SELECT payment.* FROM payment,booking WHERE booking.booking_id = payment.booking_id AND booking.customer_id = '$id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }

    }

    

    //Get booking details
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

    //Delete booking
    public function deleteBooking($booking_id){
        $query = "DELETE FROM booking WHERE booking_id = '$booking_id'";
        $result = mysqli_query($GLOBALS["db"], $query);
        return $result;

    }


}