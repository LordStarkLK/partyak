<?php

class PaymentSuccess extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
    }

    public function index()
    {
        // echo "Hi";
        $this->view("paymentSuccessView");
    }
}
