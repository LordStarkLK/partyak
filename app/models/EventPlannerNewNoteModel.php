<?php
class EventPlannerNewNoteModel extends database
{
    public function getUserType($id){
        $query = "SELECT `service_type` FROM `other_service` WHERE `service_id` = '$id' ";
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'],$query));
        return $result;
    }
    
    public function getNotes($id)
    {
        $query1 = "SELECT `service_id` FROM `other_service` WHERE `user_id`='$id'";
        $result1 = mysqli_query($GLOBALS['db'],$query1);
        while ($row = mysqli_fetch_assoc($result1)) {

        $query = "SELECT * FROM `booking` WHERE `planning_id` != 0 AND `service_id`='$row[service_id]'";
        $filtredBookings = mysqli_query($GLOBALS['db'],$query);
        $bookingResult = array();

        if ((mysqli_num_rows($filtredBookings) > 0)) {
            $i = 0;
            while ($eventResultArray = mysqli_fetch_assoc($filtredBookings)) {
                // $data['booking_id'] = $bookingResultArray['booking_id '];
                // $data['customer_id'] = $bookingResultArray['customer_id'];
                // $data['service_id'] = $bookingResultArray['service_id'];
                // $data['event_date'] = $bookingResultArray['event_date']; 
                // $data['event_type'] = $bookingResultArray['event_type'];
                // $data['noOfGuest'] = $bookingResultArray['noOfGuest'];
                // $data['full_payment'] = $bookingResultArray['full_payment'];
                // $data['planning_id'] = $bookingResultArray['planning_id'];
                $bookingResult[$i] = $eventResultArray;
                $i++;
            }
            return $bookingResult;
        } else {
            $bookingResult = null;
            return $bookingResult;
        }
    }
}
}
