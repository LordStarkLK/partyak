<?php
class PaymentModel extends database
{
    public function getPaymentDetails($booking_id){
        $query= "SELECT payment_id FROM payment WHERE booking_id=$booking_id";
        $res = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($res) > 0){
            $query = "SELECT payment.amount, booking.full_payment , other_service.advance_price FROM payment,booking,other_service WHERE payment.booking_id = booking.booking_id AND booking.service_id = other_service.service_id AND booking.booking_id = '$booking_id' ";
            $result = mysqli_query($GLOBALS['db'],$query);
            $payment = mysqli_fetch_assoc($result);
            return $payment;
        }else{
            $query = "SELECT booking.full_payment , other_service.advance_price FROM booking,other_service WHERE booking.service_id = other_service.service_id AND booking.booking_id = '$booking_id' ";
            $result = mysqli_query($GLOBALS['db'],$query);
            $payment = mysqli_fetch_assoc($result);
            return $payment;
        }

    }

}
