<?php

class SpBooking extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");

        $this->BookingModel = $this->Model("spBookingModel");
    }

    public function index($service_id)
    {
        $data['service_id'] = $service_id;
        // echo "Hi";
        $data['request_data'] = $this->BookingModel->getRequestDetails($service_id);
        $this->view("vendor/spBookingView", $data);
    }

   
}