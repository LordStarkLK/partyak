<?php

class AdminUsersVendor extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserVendorModel');
        $this->userdel = $this->model('adminUserModel');
        $this->preventBack("admin");
    }
    
    public function index(){
        
        // $data['service'] = $this->user->getService();
        // $data['service_email'] = $this->user->getServiceEmail();
        $data['vendor'] = $this->user->getVendorDetails();
        // $this->preventBack("admin");
        $this->view("admin/adminUsersVendorView",$data);
    }

    public function deleteUser($user_id){
        $this->userdel->deleteUser($user_id);
        $this->redirect("adminUsersVendor");
    }

    public function search(){
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $_POST['searchTerm']);

        // echo $searchTerm;
        $userList = $this->user->search($searchTerm);
        echo $userList;
    }

}