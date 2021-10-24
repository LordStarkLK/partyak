<?php

class SpServiceModel extends Database
{

    public function addPackageDetail($serviceName, $packageName, $packageDescription, $packageValidFrom, $packageValidTo, $id, $packageUnitprice, $packageFixedprice)
    {

        //Insert user data
        // $query = "INSERT INTO user(email, password, user_type) VALUES ('$email', '$password', 'vendor')";
        // mysqli_query($GLOBALS['db'], $query);

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE user_id='$id' LIMIT 1"));
        $userId = $result["user_id"];

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO package(user_id, service_name, package_name, description, valid_from, valid_to, per_unit_price, fixed_price) 
        VALUES ('$userId', '$serviceName', '$packageName', '$packageDescription' , '$packageValidFrom', '$packageValidTo' , '$packageUnitprice', '$packageFixedprice')";
        mysqli_query($GLOBALS['db'], $query);
    }

    public function getPackageDetails( $id){
        $query = "SELECT service_name, package_name, valid_from, valid_to FROM package where user_id='$id' ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }



}