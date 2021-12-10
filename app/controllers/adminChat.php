<?php


class AdminChat extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model("adminChatModel");
        
        // $this->preventBack("admin");
    }
    
    public function index(){
        $id=$_SESSION['userId'];
        $data['myDetails'] = $this->user->getDetails($id);
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        $this->view("admin/adminChatView",$data);
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