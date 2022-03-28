<?php
class AdminDashboardModel extends Database
{
    // users count
    public function getUserTotal(){
        $query = "SELECT COUNT(user_id) AS total FROM user";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            $result = mysqli_fetch_assoc($result);
            return $result['total'];
        }


    }
    // customer count
    public function getCustomerTotal(){
        $query = "SELECT COUNT(user_id) AS total FROM user WHERE user_type = 'customer'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            $result = mysqli_fetch_assoc($result);
            return $result['total'];

            
        }

        
    }
    // vendor count
    public function getVendorTotal(){
        $query = "SELECT COUNT(user_id) AS total FROM user WHERE user_type = 'vendor'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            $result = mysqli_fetch_assoc($result);
            return $result['total'];
        }

        
    }
    // Monthly sales
    public function getMonthlySales(){
        $query = "SELECT month(payment_date),sum(amount) AS total from payment GROUP BY month(payment_date) ORDER BY (payment_date)";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;

    }
    // bookings
    public function getBookingTotal(){
        $query = "SELECT COUNT(booking_id) AS total FROM booking";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            $result = mysqli_fetch_assoc($result);
            return $result['total'];
        }

        
    }
    // events
    public function getEventTotal(){
        $query = "SELECT COUNT(planning_id) AS total FROM event";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            $result = mysqli_fetch_assoc($result);
            return $result['total'];
        }

        
    }
    // services
    public function getServiceTotal(){
        $query = "SELECT COUNT(service_id) AS total FROM other_service";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            $result = mysqli_fetch_assoc($result);
            return $result['total'];
        }

        
    }


}