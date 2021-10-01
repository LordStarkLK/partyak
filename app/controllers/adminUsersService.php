<?php

class AdminUsersService extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserServiceModel');
    }
    
    public function index(){
        
        $data['service'] = $this->user->getService();
        $data['service_email'] = $this->user->getServiceEmail();
        // $this->preventBack("admin");
        $this->view("admin/adminUsersServiceView",$data);
    }

}