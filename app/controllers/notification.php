<?php

class Notification extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->notifyModel = $this->model("notificationModel");
    }

    public function notificationCount(){
        $userId = $this->getSession("userId");
        echo $this->notifyModel->getNotificationCount($userId);
    }

    public function updateNotification(){
        $userId = $this->getSession("userId");
        $notifyToday = $this->notifyModel->getNotificationDetails($userId,"1");
        $notifyOld = $this->notifyModel->getNotificationDetails($userId,"0");

        $output = $this->getNotificationTags($notifyToday,"1");
        $output .= $this->getNotificationTags($notifyOld,"0");

        echo $output;
        
    }

    public function getNotificationTags($result,$isToday){
        if($isToday === "1"){
            $output = "
            <div class='notification-details'>
            <div class='notes'>
                <span class='note-label'>Today</span>
            ";
        }else if(isToday === "0"){
            $output = "
            
            "
        }
    }
}

?>