<?php

class AdminDashboardNew extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
    }
    
    public function index(){
       
        $this->view("admin/adminDashboardView");
    }

}