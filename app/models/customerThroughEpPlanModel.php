<?php

class CustomerThroughEpPlanModel extends Database
{

    public function addEpEventDetail($eventType,  $eventname,$startdate, $enddate, $city, $noofguest, $id)
    {

        //Insert user data
        // $query = "INSERT INTO user(email, password, user_type) VALUES ('$email', '$password', 'vendor')";
        // mysqli_query($GLOBALS['db'], $query);

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE user_id='$id' LIMIT 1"));
        $userId = $result["user_id"];

        //Insert data to child tables of user - on_your_own_planning table
        $query = "INSERT INTO event(user_id, event_type, event_name, start_date, end_date,location,noOfGuest,plan_type) 
        VALUES ('$userId', '$eventType', '$eventname', '$startdate' , '$enddate', '$city' , '$noofguest', 'Through Event Planner')";
        mysqli_query($GLOBALS['db'], $query);
    }


    public function getEventDetails($id){
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT planning_id FROM event WHERE  user_id='$id'  ORDER BY user_id DESC LIMIT 1"));
        return $result;
        
        // $query = "SELECT planning_id  FROM event WHERE user_id='$id' ";
        // $result = mysqli_query($GLOBALS['db'],$query);
        // if(mysqli_num_rows($result) >= 0){
        //     return $result;
        // }
        // echo "hi";
    }


}