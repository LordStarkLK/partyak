<?php
class CustomerMyEventModel extends database
{
    public function getEventDetails($id){
        $query = "SELECT event_type, event_name, start_date, end_date, location, noOfGuest, plan_type,planning_id  FROM event WHERE user_id='$id' ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }

    public function deleteEvent($planning_id){
        $query = "DELETE FROM event WHERE planning_id = '$planning_id'";
        $result = mysqli_query($GLOBALS["db"], $query);
        return $result;

        $query = "DELETE * FROM service_preferences WHERE planning_id = '$planning_id'";
        $service = mysqli_query($GLOBALS["db"], $query);
        return $service;
    }

}