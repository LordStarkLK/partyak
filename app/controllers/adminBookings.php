<?php

class AdminBookings extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->bookingsModel = $this->model("adminBookingsModel");
    }

    public function index(){
        // data relating to the table
        $data['booking'] = $this->bookingsModel->getBooking();
        $data['customer'] =$this->bookingsModel->getCusName();
        $data['service'] = $this->bookingsModel->getServiceName();
        $data['package'] = $this->bookingsModel->getPackageName();

        $this->view("admin/adminBookingsView",$data);
    }

    public function search(){
        // POST taken from bookings js file
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $_POST['searchTerm']);

        // echo $searchTerm;
        $userList = $this->bookingsModel->search($searchTerm);
        echo $userList;
    }

    public function delete($booking_id){
        $this->bookingsModel->delete($booking_id);
        $this->redirect("adminBookings");
    }

}