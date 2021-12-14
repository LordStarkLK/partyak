<?php

class AdminUsersEvent extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserEventModel');
        $this->userdel = $this->model('adminUserModel');
        $this->preventBack("admin");

    }
    
    public function index(){
        
        // $this->preventBack("admin");
        $data['events'] = $this->user->getEventplanners();
        $data['event_email'] = $this->user->getEventplannerEmail();
        $this->view("admin/adminUsersEventView",$data);
    }

    public function deleteUser($user_id){
        $this->userdel->deleteUser($user_id);
        $this->redirect("adminUsersEvent");
    }

}