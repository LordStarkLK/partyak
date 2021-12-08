<?php
class ChatUser extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model("chatUserModel");
        
    }

    public function index(){
        $id=$_SESSION['userId'];
        $data['myDetails'] = $this->user->getDetails($id);
       

        $this->view("chatUserView",$data);
    }

    public function search(){
        $id=$_SESSION['userId'];
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $_POST['searchTerm']);
        $chatList = $this->user->searchChatList($id,$searchTerm);

        echo $chatList;
        
    }

    public function userList(){
        $chatList = $this->user->chatList();
        echo $chatList;
    }
}


?>