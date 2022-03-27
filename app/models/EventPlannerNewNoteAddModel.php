<?php
class EventPlannerNewNoteAddModel extends database
{
    public function insertNote($userId,$eventType,$date,$noOfGuests,$img1,$img2,$img3,$img4,$img5,$location,$description)
    {
        $query = "INSERT INTO `event_planner_new_note`(`service_type`, `recom_service_name`, `adv_pay_amount`, `full_pay_amount`, `other_suggest`) 
        VALUES 
        ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
        mysqli_query($GLOBALS['db'], $query);
    }
}
