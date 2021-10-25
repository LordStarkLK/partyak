<?php

class eventPlannerAddNote extends Database
{

    public function addEpNote($orderId, $customName, $note)
    {
        $userId = $_SESSION["userId"];

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO `event_planner_note` (`user_id`, `order_id`, `customer_name`, `note`) 
        VALUES ('$userId', '$orderId', '$customName', '$note');";
        mysqli_query($GLOBALS['db'], $query);
    }
}
