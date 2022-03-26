<?php

class Payment extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->payment = $this->model('PaymentModel');
        $this->preventBack2("customer","vendor");
    }

    public function index()
    {
        $this->view("paymentView");
    }

    public function paymentDet($booking_id,$user_id)
    {

        $data['payment_det']= $this->payment->getPaymentDetails($booking_id);
        $data['booking_id'] = $booking_id;
        $data['vendor_id'] = $user_id;
        $this->view("paymentView",$data);
    }

    public function insertPayment(){
        $booking_id = mysqli_real_escape_string($GLOBALS['db'],$_POST['booking_id']);
        $amount = mysqli_real_escape_string($GLOBALS['db'],$_POST['amount']);
        $vendor_id = mysqli_real_escape_string($GLOBALS['db'],$_POST['vendor_id']);
        $user_id = $this->getSession("userId");

        $this->payment->insertPayment($amount,$booking_id,$vendor_id,$user_id);
        // $user = mysqli_real_escape_string($GLOBALS['db'],$_POST['incoming_id']);
        
        
    }
}
