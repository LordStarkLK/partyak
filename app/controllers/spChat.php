<?php

class SpChat extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");

        // $this->preventBack("vendor");

        $this->user = $this->model("vendorChatUserModel");

    }

    public function index($service_id)
    {

        $data['service_id'] = $service_id;
        

        $id=$_SESSION['userId'];
        $data['userType'] = $this->user->getUserType($service_id);
        $data['myDetails'] = $this->user->getDetails($id);

        // echo "Hi";
        $this->view("vendor/spChatView",$data);
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