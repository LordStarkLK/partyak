<?php

class AdminUsersEvent extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
    }
    
    public function index(){
        
        // $this->preventBack("admin");
        $this->view("admin/adminUsersEventView");
    }

}