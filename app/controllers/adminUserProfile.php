<?php

class AdminUserProfile extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserModel');
        $this->preventBack("admin");
    }
    
    public function index(){
        
        $data['customers'] = $this->user->getCustomers();
        $data['customer_email'] = $this->user->getCustomerEmail();
        // echo "$data[customers]";
        // $this->preventBack("admin");
        $this->view("admin/UserProfileView",$data);
    }

    public function deleteUser($user_id){
        $this->user->deleteUser($user_id);
        $this->redirect("adminUsers");
    }

}