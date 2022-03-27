<?php
class eventPlannerEventModel extends database
{
    public function getUserType($id){
        $query = "SELECT `service_type` FROM `other_service` WHERE `service_id` = '$id' ";
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'],$query));
        return $result;
    }
    public function viewEvent()
    {
        $query ="SELECT `user_id`, `event_page_id`, `event_type`, MONTH(date) as `month`, DAY(date) as `date`,`location` FROM `event_planner_event_pages`;";
        $result = mysqli_query($GLOBALS['db'], $query);
        $eventResult = array();

        if ((mysqli_num_rows($result) > 0)) {
            $i = 0;
            while ($eventResultArray = mysqli_fetch_assoc($result)) {
                $data['user_id'] = $eventResultArray['user_id'];
                $data['event_page_id'] = $eventResultArray['event_page_id'];
                $data['event_type'] = $eventResultArray['event_type'];
                $data['month'] = $eventResultArray['month'];
                $data['date'] = $eventResultArray['date'];
                $data['location'] = $eventResultArray['location'];
                $eventResult[$i] = $data;
                $i++;
            }
            return $eventResult;
        } else {
            $eventResult = null;
            return $eventResult;
        }
    }
    public function delEvent($eventId){
        $query ="DELETE FROM `event_planner_event_pages` WHERE `event_page_id`=$eventId ";
        mysqli_query($GLOBALS['db'], $query);
    }
}