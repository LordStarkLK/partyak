<?php

class AdminUsersService extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserServiceModel');
        $this->userdel = $this->model('adminUserModel');
        $this->preventBack("admin");
    }
    
    public function index(){
        
        $data['service'] = $this->user->getService();
        $data['service_email'] = $this->user->getServiceEmail();
        // $this->preventBack("admin");
        $this->view("admin/adminUsersServiceView",$data);
    }

    public function deleteUser($user_id){
        $this->userdel->deleteUser($user_id);
        $this->redirect("adminUsersService");
    }

}