<?php

class AdminBookings extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->bookingsModel = $this->model("adminBookingsModel");
    }

    public function index(){
        $data['booking'] = $this->bookingsModel->getBooking();
        $data['customer'] =$this->bookingsModel->getCusName();
        $data['service'] = $this->bookingsModel->getServiceName();
        $data['package'] = $this->bookingsModel->getPackageName();

        $this->view("admin/adminBookingsView",$data);
    }
}