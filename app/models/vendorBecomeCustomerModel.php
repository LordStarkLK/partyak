<?php

class vendorBecomeCustomerModel extends Database
{
    public function changeUserRole($userId){
        $query = "UPDATE user SET user_type = 'customer' WHERE user_id = '$userId'";
        $result = mysqli_query($GLOBALS['db'],$query);
    }
}