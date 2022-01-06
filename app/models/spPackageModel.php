<?php

class SpPackageModel extends Database
{
    
    public function addPackageDetail($serviceName, $packageName, $packageDescription, $packageValidFrom, $packageValidTo, $service_id, $packageUnitprice, $packageFixedprice)
    {

        //Insert user data
        // $query = "INSERT INTO user(email, password, user_type) VALUES ('$email', '$password', 'vendor')";
        // mysqli_query($GLOBALS['db'], $query);

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT $service_id FROM other_service WHERE $service_id='$service_id' LIMIT 1"));
        $serviceId = $result["$service_id"];

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO package(service_id, service_name, package_name, description, valid_from, valid_to, per_unit_price, fixed_price) 
        VALUES ('$serviceId', '$serviceName', '$packageName', '$packageDescription' , '$packageValidFrom', '$packageValidTo' , '$packageUnitprice', '$packageFixedprice')";
        mysqli_query($GLOBALS['db'], $query);
    }

    public function getPackageDetails( $service_id){
        $query = "SELECT service_id, service_name, package_name, valid_from, valid_to FROM package where service_id='$service_id' ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


}