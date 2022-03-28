<?php
class CustomerEventSBRecepModel extends database
{
    public function getRecommendDetails($planning_id){
        $query = "SELECT * FROM event_planner_new_note WHERE planning_id='$planning_id' ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


}