<?php

class eventPlannerAddNote extends Database
{

    public function addEpNote($event_name, $customName, $note)
    {
        $userId = $_SESSION["userId"];

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO `event_planner_note` (`user_id`, `event_name`, `customer_name`, `note`) 
        VALUES ('$userId', '$event_name', '$customName', '$note');";
        mysqli_query($GLOBALS['db'], $query);
    }
}
