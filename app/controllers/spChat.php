<?php

class SpChat extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        // $this->preventBack("vendor");
    }

    public function index($service_id)
    {
        $data['service_id'] = $service_id;
        // echo "Hi";
        $this->view("vendor/spChatView",$data);
    }

   
}