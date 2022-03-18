<?php
class eventPlannerAddEventModel extends database
{
    public function addEvent($userId,$eventType,$date,$noOfGuests, $image,$location,$description)
    {
        $query = "INSERT INTO `event_planner_event_pages`(`user_id`, `event_type`, `date`, `no_of_guests`, `image1`, `location`, `description`) VALUES
         ('$userId','$eventType','$date','$noOfGuests','$image','$location','$description');";
        mysqli_query($GLOBALS['db'], $query);
    }
}
