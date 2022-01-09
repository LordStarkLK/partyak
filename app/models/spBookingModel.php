<?php

class SpBookingModel extends Database
{
    
    
    public function getRequestDetails($service_id){
        $query = "SELECT customer_id, service_id, package_id, event_date, event_type FROM booking WHERE service_id='$service_id' ";

        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    

}