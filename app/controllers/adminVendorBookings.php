<?php

class AdminVendorBookings extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
    }

    public function index(){
        
        $this->view("admin/vendorBookingsView");
    }
}