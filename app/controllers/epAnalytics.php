<?php

class EPAnalytics extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
    }

    public function index()
    {
        // echo "Hi";
        $this->view("eventPlanner/epanalyticsView");
    }
}
