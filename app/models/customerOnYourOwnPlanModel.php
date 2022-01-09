<?php

class CustomerOnYourOwnPlanModel extends Database
{

    public function addEventDetail($eventType,  $eventname,$startdate, $enddate, $city, $noofguest, $id)
    {

        //Insert user data
        // $query = "INSERT INTO user(email, password, user_type) VALUES ('$email', '$password', 'vendor')";
        // mysqli_query($GLOBALS['db'], $query);

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE user_id='$id' LIMIT 1"));
        $userId = $result["user_id"];

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO event(user_id, event_type, event_name, start_date, end_date,location,noOfGuest,plan_type) 
        VALUES ('$userId', '$eventType', '$eventname', '$startdate' , '$enddate', '$city' , '$noofguest', 'On Your Own')";
        mysqli_query($GLOBALS['db'], $query);
    }

    public function updateEventDetail($eventType,  $eventname,$startdate, $enddate, $city, $noofguest,$planning_id){
            $query = "UPDATE event  SET event_type='$eventType', event_name='$eventname', start_date='$startdate', end_date= '$enddate', location='$city',noOfGuest='$noofguest' WHERE (planning_id='$planning_id') LIMIT 1";
            mysqli_query($GLOBALS['db'], $query);
    }

    public function selectEventDetail($planning_id){
        $query ="SELECT * FROM event WHERE planning_id='$planning_id' LIMIT 1";
        $result = mysqli_query($GLOBALS['db'],$query);
        $eventDet = mysqli_fetch_assoc($result);
        return $eventDet;
    }

}