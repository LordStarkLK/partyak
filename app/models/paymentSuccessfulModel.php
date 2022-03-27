<?php

class paymentSuccessfulModel extends Database
{
    public function getPayment(){
        $query = "SELECT * FROM payment ORDER BY payment_id DESC LIMIT 1";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return mysqli_fetch_assoc($result);
        }
    }
}
