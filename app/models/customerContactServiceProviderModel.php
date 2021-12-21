<?php
class CustomerContactServiceProviderModel extends database
{
    public function getServiceDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getEpDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='eventPlanner'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getVenueDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='venues_halls'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getCateDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='catering'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getPhotoDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='photography'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }

    public function getMusicDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='musical'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getDanceDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='dancing'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getSalonDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='saloon'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getCakeDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='cakes'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getDecoDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='decoration'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }

    public function getSoundDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='sounds_lightings'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getDressDetails(){
        $query = "SELECT service_name,service_image,service_location FROM other_service WHERE service_type='dresses'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }

}