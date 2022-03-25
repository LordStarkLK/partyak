<<?php


class CustomerProfileBooking extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->booking = $this->model('customerProfileBookingModel');
        $this->preventBack("customer");
    }
    
    public function index(){

        $id=$_SESSION['userId'];

        //Get booking details
        $data['bookingDetail'] = $this->booking->getBookingDetails($id);
        $data['bookingDet'] = $this->booking->getBookingDets($id);
        //Get payment details
        $data['paymentDetails'] = $this->booking->getPaymentDetails($id);
        $this->view("customer/customerProfileBookingView",$data);
    }

    public function deleteBooking($booking_id){
        $this->booking->deleteBooking($booking_id);
        $this->redirect("customerProfileBooking");
    }

}