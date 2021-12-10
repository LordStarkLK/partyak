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

    public function getCustomerDetails(){
        $query = "SELECT * FROM user where user_type='customer' ORDER BY 'user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function deleteUser($user_id){
        $query = "DELETE FROM user WHERE user_id = '$user_id'";

        $result = mysqli_query($GLOBALS["db"], $query);
        return $result;
    }


}