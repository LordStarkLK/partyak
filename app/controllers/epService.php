<?php

class EpService extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
    }

    public function index()
    {
        // echo "Hi";
        $this->view("eventPlanner/epServiceView");
    }
}
