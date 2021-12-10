<?php
class AdminUserVendorModel extends database
{
    public function getService(){
        $query = "SELECT user_id,f_name,l_name FROM vendor WHERE vendor_type = 'service' ORDER BY user_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getServiceEmail(){
        $query = "SELECT user.email FROM user,vendor WHERE user.user_id = vendor.user_id AND vendor.vendor_type = 'service'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }

    }

    public function getVendorDetails(){
        $query = "SELECT * FROM user WHERE user_type = 'vendor'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }
}