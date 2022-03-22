<?php

class epMyEvent extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->epEvent = $this->model('eventPlannerEventModel');
    }

    public function index()
    {
        $data['event'] = $this->epEvent->viewEvent();
        $this->view("eventPlanner/epMyEventView",$data);
        $this->view("eventPlanner/epMyEventView");
    }
}
