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
        $query = "INSERT INTO on_your_own_planning(user_id, event_type, event_name, start_date, end_date,location,noOfGuest) 
        VALUES ('$userId', '$eventType', '$eventname', '$startdate' , '$enddate', '$city' , '$noofguest')";
        mysqli_query($GLOBALS['db'], $query);
    }



}