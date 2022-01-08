<?php
class CusChat extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model("cusChatModel");
        
    }

    public function index($userId){
        $id=$_SESSION['userId'];
        $data['userId'] = $userId;
        $data['myName'] = $this->user->getName($id);
        $data['userDetails'] = $this->user->getUserDetails($userId);



        $this->view("customer/cusChatView",$data);
    }

    public function getChatList(){
        $user = mysqli_real_escape_string($GLOBALS['db'],$_POST['incoming_id']);
        $chatList = $this->user->getChat($user);

        echo $chatList;
    }

    public function sendMessage(){
        
        // $message = str_replace('~', ' ', $message);
        // echo $message;
        // echo $user . " " . $message;
        $user = mysqli_real_escape_string($GLOBALS['db'],$_POST['incoming_id']);
        $message = mysqli_real_escape_string($GLOBALS['db'],$_POST['message']);
        // echo $message;

        $this->user->send($user,$message);
    }

    
}


?>