<?php

class SpBookingModel extends Database
{
    
    
    public function getRequestDetails($service_id){
        $query = "SELECT * FROM booking WHERE service_id='$service_id' AND status='pending' ";

        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getCustomerName($service_id){
        $query = "SELECT user.f_name, user.l_name, user.email FROM user,booking WHERE  user.user_id=booking.customer_id AND service_id='$service_id' AND booking.status='pending' ";
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

    //for accept and reject booking requests
    public function acceptRequest($booking_id){
        $query = "UPDATE booking SET status = 'accept' WHERE booking_id='$booking_id'";
        mysqli_query($GLOBALS['db'],$query);
        // return $result;

        // notification
        $query = "SELECT booking.customer_id,other_service.service_name from booking,other_service WHERE booking.service_id = other_service.service_id AND booking.booking_id = '$booking_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        $result = mysqli_fetch_assoc($result);
        $customer_id = $result["customer_id"];
        $service_name = $result["service_name"];

        $description = "Your request to the service of $service_name has been accepted, You can hire it by doing the advanced payment";
        $query = "INSERT INTO notifications(notification_type,heading,description,url,user_id,notification_status,date)
         VALUES ('booking_accept','Booking Accepted','$description','http://localhost/partyak/customerProfileBooking','$customer_id','0',NOW())";
        mysqli_query($GLOBALS['db'], $query); 



        
    }

    public function rejectRequest($booking_id){
        $query = "UPDATE booking SET status = 'reject' WHERE booking_id = '$booking_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
        
    }

    //functions related with paid booking details

    public function acceptedBookings($service_id){
        $query = "SELECT customer_id, booking_id, event_date, full_payment, package_id, noOfGuest FROM booking WHERE service_id='$service_id' AND status='Accepted' ORDER BY booking.event_date DESC ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function bookingPaymentDetails($service_id){
        $query = " SELECT user.email, user.f_name, payment.amount, payment.p_status FROM user, booking, payment WHERE booking.customer_id = user.user_id AND payment.booking_id=booking.booking_id AND booking.service_id='$service_id' ORDER BY booking.event_date DESC ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function bookedPackageDetails($service_id){
        $query = " SELECT package.package_name, package.per_unit_price FROM package, booking, payment WHERE booking.package_id = package.package_id AND payment.booking_id=booking.booking_id AND booking.service_id='$service_id' ORDER BY booking.event_date DESC ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getUserType($id){
        $query = "SELECT `service_type` FROM `other_service` WHERE `service_id` = '$id' ";
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'],$query));
        return $result;
    }

    public function getServiceId($booking_id){
        $query = "SELECT service_id from booking WHERE booking_id = $booking_id";
        $result = mysqli_query($GLOBALS['db'],$query);

        return $result;
    }

}