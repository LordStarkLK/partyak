<?php
class EventPlannerNoteModel extends database
{
    public function getNotes()
    {
        $query = "SELECT * FROM `event_planner_note`";
        $result = mysqli_query($GLOBALS['db'], $query);
        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
    public function deleteNotes($noteId)
    {
        $delQuery = "DELETE FROM `event_planner_note` WHERE note_id = $noteId;";
        mysqli_query($GLOBALS['db'], $delQuery);
    }
    public function insertNoteVendor($noteId, $noteIdVendor)
    {
        if ($noteIdVendor) {
            $insertNoteBodyQuery = "INSERT INTO `event_planner_note_body` (`note_id`, `vendor_name`) VALUES ('$noteId', '$noteIdVendor');";

            mysqli_query($GLOBALS['db'], $insertNoteBodyQuery);
        }
    }
    public function getNoteBody()
    {
        $getNoteBodyQuery = "SELECT * FROM `event_planner_note_body`;";
        $resultNoteBody = mysqli_query($GLOBALS['db'], $getNoteBodyQuery);
        if (mysqli_num_rows($resultNoteBody) > 0) {
            return $resultNoteBody;
        }
    }
    public function deleteNoteBody($vendor_note_id)
    {
        $delNoteBodyQuery = "DELETE FROM `event_planner_note_body` WHERE vendor_note_id = $vendor_note_id;";
        mysqli_query($GLOBALS['db'], $delNoteBodyQuery);
    }

}

