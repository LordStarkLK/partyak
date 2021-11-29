<?php
class CustomerMyEventModel extends database
{
    public function getEventDetails($id){
        $query = "SELECT event_type, event_name, start_date, end_date, location, noOfGuest, plan_type  FROM event WHERE user_id='$id' ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }

}