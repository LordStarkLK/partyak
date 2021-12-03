<?php
class Chat extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model("chatModel");
        
    }

    public function index(){
        $id=$_SESSION['userId'];
        $data['myName'] = $this->user->getName($id);



        $this->view("chatView",$data);
    }

    public function search(){
        
        
        $id=$_SESSION['userId'];
        
        $searchTerm = $_POST['searchTerm'];
        $chatList = $this->user->searchChatList($id,$searchTerm);

        echo $chatList;

        
    }
}


?>