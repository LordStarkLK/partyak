<?php
class AdminUserModel extends database
{
    public function getCustomers(){
        $query = "SELECT user_id,f_name,l_name FROM customer ORDER BY 'user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getCustomerEmail(){
        $query = "SELECT email FROM user where user_type='customer' ORDER BY 'user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }


}