<?php
class EventPlannerNoteModel extends database
{
    public function getNotes()
    {
        $query = "SELECT * FROM `event_planner_note`;";
        $result = mysqli_query($GLOBALS['db'], $query);
        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}
