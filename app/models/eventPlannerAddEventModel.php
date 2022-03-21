<?php
class eventPlannerAddEventModel extends database
{
    public function addEvent($userId,$eventType,$date,$noOfGuests,$img1,$img2,$img3,$img4,$img5,$location,$description)
    {
        $query = "INSERT INTO `event_planner_event_pages`(`user_id`, `event_type`, `date`, `no_of_guests`, `image1`, `image2`, `image3`, `image4`, `image5`, `location`, `description`) VALUES
         ('$userId','$eventType','$date','$noOfGuests','$img1','$img2','$img3','$img4','$img5','$location','$description');";
        mysqli_query($GLOBALS['db'], $query);
    }
}
// public function addEvent($userId,$eventType,$date,$noOfGuests,$img1,$img2,$img3,$img4,$img5,$location,$description)
//     {
//         $query = "INSERT INTO `event_planner_event_pages`(`user_id`, `event_page_id`, `event_type`, `date`, `no_of_guests`, `image1`, `image2`, `image3`, `image4`, `image5`, `location`, `description`) VALUES
//          ('$userId','$eventType','$date','$noOfGuests','$img1','$img2','$img3','$img4','$img5','$location','$description');";
//         mysqli_query($GLOBALS['db'], $query);
//     }