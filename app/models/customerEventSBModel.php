<?php
class CustomerEventSBModel extends database
{
    public function getEventDetails($planning_id){
        $query = "SELECT * FROM event WHERE planning_id='$planning_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        // if(mysqli_num_rows($result) >= 0){
        //     return $result;
        // }
        $eventP = mysqli_fetch_assoc($result);
        return $eventP;
    }

    public function getServicePDetails($planning_id){
        $query = "SELECT * FROM service_preferences WHERE planning_id='$planning_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        // if(mysqli_num_rows($result) >= 0){
        //     return $result;
        // }
        $serviceP = mysqli_fetch_assoc($result);
        return $serviceP;
    }

}