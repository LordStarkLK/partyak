<?php

class SpPackageModel extends Database
{
    
    public function addPackageDetail($serviceName, $packageName, $packageDescription, $packageValidFrom, $packageValidTo, $service_id, $packageUnitprice, $packageFixedprice)
    {
        // $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT $service_id FROM other_service WHERE $service_id='$service_id' LIMIT 1"));
        // $serviceId = $result["$service_id"];

        $query = "INSERT INTO package(service_id, service_name, package_name, description, valid_from, valid_to, per_unit_price, fixed_price) 
        VALUES ('$service_id', '$serviceName', '$packageName', '$packageDescription' , '$packageValidFrom', '$packageValidTo' , '$packageUnitprice', '$packageFixedprice')";
        $result=mysqli_query($GLOBALS['db'], $query);
        if($result){
            echo "Hi";
        }
        return $result;
    }

    public function getPackageDetails( $service_id){
        $query = "SELECT * FROM package where service_id='$service_id' ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }

    public function getReleventServiceName($service_id){
        $query = "SELECT service_id, service_name FROM other_service where service_id='$service_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        } 
    }

    public function updatePackageDetails($serviceName,$packageName, $packageDescription, $packageValidFrom, $packageValidTo, $package_id, $packageUnitprice, $packageFixedprice)
    {
        $query = "UPDATE package SET package_name='$packageName', description='$packageDescription', valid_from='$packageValidFrom', valid_to='$packageValidTo', per_unit_price='$packageUnitprice', fixed_price='$packageFixedprice' WHERE package_id='$package_id' ";
        mysqli_query($GLOBALS['db'], $query);
    }

    public function deletePackage($package_id){
        $query = "DELETE FROM package WHERE package_id=$package_id";
        $result = mysqli_query($GLOBALS["db"], $query);
        return $result;
    }

}