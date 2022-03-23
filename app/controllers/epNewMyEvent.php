<?php

class EPNewMyEvent extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->epEvent = $this->model('eventPlannerEventModel');
    }

    public function index($service_id)
    {
        $data['service_id']=$service_id;

        $id=$_SESSION['userId'];
        $data['userType'] = $this->epEvent->getUserType($id);

        $data['event'] = $this->epEvent->viewEvent();
        $this->view("eventPlanner/epNewMyEventView",$data);
    }
}
