<?php
class EventPlannerNewNoteModel extends database
{
    public function getUserType($id){
        $query = "SELECT `service_type` FROM `other_service` WHERE `service_id` = '$id' ";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }
    
    public function getNotes()
    {

    }
}
