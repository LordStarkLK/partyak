<?php

class eventPlannerEventEventsModel extends Database
{
    public function getEventDetails($eventPageId){
        $query ="SELECT `user_id`, `event_page_id`, `event_type`, YEAR(date) as `year`, MONTHNAME(date) as `month`, DAY(date) as `day`, `no_of_guests`, `image1`, `image2`, `image3`, `image4`, `image5`, `location`, `description`
         FROM `event_planner_event_pages` WHERE `event_page_id` = '$eventPageId' ;";
        $result = mysqli_query($GLOBALS['db'], $query);
        $eventDetails = mysqli_fetch_assoc($result);
        return $eventDetails;
    }
}