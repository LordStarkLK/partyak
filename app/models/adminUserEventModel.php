<?php
class AdminUserEventModel extends database
{
    public function getEventplanners(){
        $query = "SELECT user_id,f_name,l_name FROM `vendor` WHERE vendor_type = 'event' ORDER BY user_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getEventplannerEmail(){
        $query = "SELECT user.email FROM user,vendor WHERE user.user_id = vendor.user_id AND vendor.vendor_type = 'event'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }


}