<?php
class SpWalletModel extends Database
{
    public function getWalletDetails($user_id){
        $query = "SELECT * FROM wallet WHERE user_id = '$user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getPaymentDetails($user_id){
        $query = "SELECT * FROM payment WHERE vendor_id = '$user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getSettlementDetails($user_id){
        $query = "SELECT * FROM vendor_payment WHERE vendor_id = '$user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}



