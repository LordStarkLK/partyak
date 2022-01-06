<?php
class CustomerEventSBModel extends database
{
    public function getEventDetails($planning_id){
        $query = "SELECT * FROM event WHERE planning_id='$planning_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        // if(mysqli_num_rows($result) >= 0){
        //     return $result;
        // }
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

}