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


     public function updateProfile($fname, $lname, $nic, $gender, $address, $id){
        $query = "UPDATE customer  SET f_name='$fname', l_name='$lname', nic='$nic', gender= '$gender', address='$address' WHERE user_id='$id' LIMIT 1";
        mysqli_query($GLOBALS['db'], $query);
     }

     
     public function updateEmail($email, $id){
        $query = "UPDATE user  SET email='$email' WHERE user_id='$id' LIMIT 1";
        mysqli_query($GLOBALS['db'], $query);
     }



} 