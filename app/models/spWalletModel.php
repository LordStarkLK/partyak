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

    public function getUserDetails($user_id){
        $query = " SELECT user.f_name, user.l_name FROM user WHERE $user_id='$user_id' ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function requestPayment($user_id, $amount){
        $query = " INSERT INTO vendor_request(user_id, req_amount, status) VALUES ('$user_id','$amount','Requested') ";
        $result = mysqli_query($GLOBALS['db'],$query);

        return $result;
        
    }
}



