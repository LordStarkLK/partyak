<?php

class vendorSidebar extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
    }

    public function index($service_id)
    {
        $data['service_id']=$service_id;
        $this->view("eventPlanner/spSidebar",$data);
    }
}
