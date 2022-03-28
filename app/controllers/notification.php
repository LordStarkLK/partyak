<?php

class Notification extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->notifyModel = $this->model("notificationModel");
    }

    // change the status of read into 1
    public function readNotification($notificationId)
    {
        $userId = $this->getSession("userId");

        $this->notifyModel->updateUserNotification($userId, $notificationId);
    }

    // get notification count
    public function notificationCount(){
        $userId = $this->getSession("userId");
        echo $this->notifyModel->getNotificationCount($userId);
    }

    // getting the html of notifications to echo to notification js file
    public function updateNotification(){
        $userId = $this->getSession("userId");
        $notifyToday = $this->notifyModel->getNotificationDetails($userId,"1");
        $notifyOld = $this->notifyModel->getNotificationDetails($userId,"0");

        $output = $this->getNotificationTags($notifyToday,"1");
        $output .= $this->getNotificationTags($notifyOld,"0");

        echo $output;
        
    }

    // display unread 
    public function getUnreadNotification()
    {
        $userId = $this->getSession("userId");

        $todayNotification = $this->notifyModel->getUnreadNotificationDetails($userId, "1");
        $oldNotification = $this->notifyModel->getUnreadNotificationDetails($userId, "0");

        $output = $this->getNotificationTags($todayNotification, "1");
        $output .= $this->getNotificationTags($oldNotification, "0");

        echo $output;
    }




    // html parts of notifications
    public function getNotificationTags($result,$isToday){
        if($isToday === "1"){
            $output = "
            <div class='notification-details'>
            <div class='notes'>
                <span class='note-label'>Today</span>
            ";
        }else if($isToday === "0"){
            $output = "
            <div class='notification-details'>
            <div class='notes'>
                <span class='note-label'>Old</span>
            ";
        }

        $images = array("new_service" => "notify.webp");
        $commonPath = "http://localhost/partyak/public/img/";

        while($row = mysqli_fetch_assoc($result)){
            $imagePath = $commonPath . "notify.webp";
            $message = $row["heading"];
            $courseName = $row["description"];
            $notificationId = $row["notification_id"];
            $path = $row["url"];
            $id = "notification-" . $notificationId;

            $output .=
                "
            <a href='javascript:goToPage({$notificationId})' id='notification-link-{$notificationId}' data-value='{$path}' style='all: unset;'>
            <div class='note'>
            <img src='{$imagePath}'>
            <div class='text'>
                <span><b>{$message}</b></span><br>
                <span>{$courseName}</span><br>
                <span>10 hours ago</span>
            </div>
            <div class='read-status' id='{$id}'>        
            ";

        if($row["notification_status"] == 0){
            $output .=
            "
            <i class='fa fa-circle' aria-hidden='true'></i>
            <object>
                <a href='javascript:readNotification({$notificationId})' style='all: unset;'>
                    <span class='tooltip'>Mark as read</span>
                </a>
            </object>        
            ";
        }
        
        $output .=
            "
            </div>
            </div>
            </a>
            ";
            
            
        }

        $output .=
        "
        </div>
        </div>
        ";

        return $output;



    }
}

?>