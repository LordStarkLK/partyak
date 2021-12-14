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

}