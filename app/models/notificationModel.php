<?php

class NotificationModel extends Database{
    public function getNotificationCount($userId){
        $query = "SELECT COUNT(notification_id) AS count FROM notifications WHERE user_id = '$userId' AND notification_status = '0'";
        $result = mysqli_query($GLOBALS["db"],$query);
        return mysqli_fetch_assoc($result)["count"];

    }

    public function getNotificationDetails($userId,$isToday){
        if($isToday === "1"){
            $query = "SELECT * FROM notifications WHERE user_id = '$userId' AND DATE(date)=DATE(NOW()) ORDER BY date DESC";
        }else if($isToday === "0"){
            $query = "SELECT * FROM notifications WHERE user_id = '$userId' AND DATE(date)<>DATE(NOW()) ORDER BY date DESC";
        }

        $results = mysqli_query($GLOBALS["db"],$query);

        return $results;
    }

    public function getUnreadNotificationDetails($userId, $isToday)
    {
        if ($isToday === "1") {
            $query = "SELECT * FROM notifications WHERE user_id = '$userId' AND DATE(date)=DATE(NOW()) AND notification_status='0' ORDER BY date DESC";
        } else if ($isToday === "0") {
            $query = "SELECT * FROM notifications WHERE user_id = '$userId' AND DATE(date)<>DATE(NOW()) AND notification_status='0' ORDER BY date DESC";
        }

        $results = mysqli_query($GLOBALS["db"], $query);

        return $results;
    }

    
    public function updateUserNotification($userId, $notificationId)
    {
        $query = "UPDATE notifications SET notification_status='1' WHERE user_id='$userId' AND notification_id='$notificationId'";

        mysqli_query($GLOBALS["db"], $query);
    }



}