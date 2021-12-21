<?php

class SpBusinessModel extends Database
{
    
    public function getVendorServices($id)
    {
        $query ="SELECT status, service_name, service_type, service_location FROM other_service WHERE user_id='$id' ";
        $result = mysqli_query($GLOBALS['db'], $query) ;
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }
    

}