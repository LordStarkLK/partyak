<?php
class SpAnalyticModel extends Database
{
    

    public function getSettlementDetails($user_id){
        $query = "SELECT * FROM vendor_payment WHERE vendor_id = '$user_id' LIMIT 5 ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getPaymentDetails($user_id){
        $query = "SELECT * FROM wallet WHERE user_id = '$user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    
}



