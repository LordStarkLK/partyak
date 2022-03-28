<?php
class EventPlannerNotePageModel extends database
{
    public function getNotes($bookingId)
    {
        $query = "SELECT * FROM `event_planner_new_note` WHERE `booking_id` = '$bookingId';";
        $result = mysqli_query($GLOBALS['db'],$query);
        $noteInfo = array();

        if ((mysqli_num_rows($result) > 0)) {
            $i = 0;
            while ($noteResultArray = mysqli_fetch_assoc($result)) {
                // $data['booking_id'] = $bookingResultArray['booking_id '];
                // $data['customer_id'] = $bookingResultArray['customer_id'];
                // $data['service_id'] = $bookingResultArray['service_id'];
                // $data['event_date'] = $bookingResultArray['event_date']; 
                // $data['event_type'] = $bookingResultArray['event_type'];
                // $data['noOfGuest'] = $bookingResultArray['noOfGuest'];
                // $data['full_payment'] = $bookingResultArray['full_payment'];
                // $data['planning_id'] = $bookingResultArray['planning_id'];
                $noteInfo[$i] = $noteResultArray;
                $i++;
            }
            return $noteInfo;
        } else {
            $noteInfo = null;
            return $noteInfo;
        }
    }
}