<?php
class CustomerEventSBModel extends database
{

    public function addToDoTasks($taskName, $planning_id){

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO event_schedule_board(task_name, planning_id) 
        VALUES ('$taskName', '$planning_id')";
        mysqli_query($GLOBALS['db'], $query);

    }

    public function getTodoTasks($planning_id){
        $query = "SELECT * FROM event_schedule_board WHERE planning_id='$planning_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
        // $todo = mysqli_fetch_assoc($result);
        // return $todo;
    }


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