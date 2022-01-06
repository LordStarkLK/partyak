<?php

class AdminUsers extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserModel');
        $this->preventBack("admin");
    }
    
    public function index(){
        
        // $data['customers'] = $this->user->getCustomers();
        $data['customer'] = $this->user->getCustomerDetails();
        // echo "$data[customers]";
        // $this->preventBack("admin");
        $this->view("admin/adminUsersView",$data);
    }

    public function deleteUser($user_id){
        $this->user->deleteUser($user_id);
        $this->redirect("adminUsers");
    }

    public function search(){
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $_POST['searchTerm']);

        // echo $searchTerm;
        $userList = $this->user->search($searchTerm);
        echo $userList;
    }

}