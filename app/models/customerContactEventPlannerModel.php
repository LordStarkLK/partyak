<?php
class CustomerContactEventPlannerModel extends database
{

    public function getEpDetails(){
            $query = "SELECT * FROM other_service WHERE service_type='eventPlanner'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }    
    }
}