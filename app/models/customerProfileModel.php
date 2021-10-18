<?php
class CustomerProfileModel extends database
{
     public function getProfile($id){
         $query = "SELECT f_name, l_name, address, nic, gender FROM customer WHERE user_id='$id' LIMIT 1";
         $result = mysqli_query($GLOBALS['db'],$query);
         $user = mysqli_fetch_assoc($result);
         return $user;
    
     }

     public function getCustomerEmail($id){
         $query = "SELECT email FROM user WHERE user_id='$id' LIMIT 1";
         $result = mysqli_query($GLOBALS['db'],$query);
         $user = mysqli_fetch_assoc($result);
         return $user;
     }

} 