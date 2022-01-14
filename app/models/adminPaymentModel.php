<?php
class AdminPaymentModel extends database{
    public function getPayment(){
        $query = "SELECT * FROM booking,payment WHERE payment.booking_id = booking.booking_id ORDER BY payment_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }

    public function getcustomer(){
        $query = "SELECT user.f_name,user.l_name FROM user,payment WHERE user.user_id = payment.customer_id ORDER BY payment.payment_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }

    public function getPackage(){
        $query = "SELECT package.package_name,package.per_unit_price FROM package,booking,payment WHERE payment.booking_id = booking.booking_id AND booking.package_id = package.package_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }

    public function getService(){
        $query = "SELECT other_service.service_name FROM other_service,booking,payment WHERE payment.booking_id = booking.booking_id AND booking.service_id = other_service.service_id ORDER BY payment.payment_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
        
    }

    public function getMarketingpayment(){
        $query = "SELECT marketing_payment.*,marketing_content.upload_status,user.f_name,user.l_name FROM marketing_payment,marketing_content,user WHERE marketing_payment.content_id = marketing_content.content_id AND marketing_content.user_id = user.user_id ORDER BY marketing_payment.content_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
        
    }
}