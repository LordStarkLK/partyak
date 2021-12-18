<?php
class AdminBookingsModel extends database {
    public function getBooking(){
        $query = "SELECT * from booking ORDER BY 'booking_id' DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    public function getCusName(){
        $query = "SELECT user.f_name,user.l_name FROM user,booking WHERE user.user_id = booking.customer_id ORDER BY booking.booking_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    public function getServiceName(){
        $query = "SELECT other_service.service_name FROM other_service,booking WHERE other_service.service_id = booking.service_id ORDER BY booking.booking_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    public function getPackageName(){
        $query = "SELECT package.package_name FROM package,booking WHERE package.package_id = booking.package_id ORDER BY booking.booking_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    


}