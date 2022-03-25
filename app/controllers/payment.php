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

    public function paymentDet($booking_id)
    {

        $data['payment_det']= $this->payment->getPaymentDetails($booking_id);
        $this->view("paymentView",$data);
    }
}
