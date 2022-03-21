<<?php


class CustomerProfileBooking extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->booking = $this->model('customerProfileBookingModel');
        $this->preventBack("customer");
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");

        $id=$_SESSION['userId'];

        $data['bookingDetail'] = $this->booking->getBookingDetails($id);
        $data['bookingDet'] = $this->booking->getBookingDets($id);
        $this->view("customer/customerProfileBookingView",$data);
    }

}