<?php

class AdminUsersEvent extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserEventModel');
    }
    
    public function index(){
        
        // $this->preventBack("admin");
        $data['events'] = $this->user->getEventplanners();
        $data['event_email'] = $this->user->getEventplannerEmail();
        $this->view("admin/adminUsersEventView",$data);
    }

}