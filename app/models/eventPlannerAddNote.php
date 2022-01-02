<?php

class eventPlannerAddNote extends Database
{

    public function addEpNote($customId,  $customName, $eventName, $eventDate)
    {

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO `event_planner_note` (`customer_id`, `customer_name` , `event_name`, `event_date`) 
        VALUES ('$customId', '$customName', '$eventName',  '$eventDate');";
        mysqli_query($GLOBALS['db'], $query);

        $_SESSION["addNoteStatus"] = "Success";
    }
}
