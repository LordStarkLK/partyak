<?php

class PaymentSuccess extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->user= $this->model('paymentSuccessfulModel');
        $this->preventBack2("customer","vendor");
    }

    public function index()
    {
        // echo "Hi";
        $data["reciept"] = $this->user->getPayment();
        $this->view("paymentSuccessView",$data);
    }
}
