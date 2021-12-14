<?php

class AdminBookings extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
    }

    public function index(){
        
        $this->view("admin/adminBookingsView");
    }
}