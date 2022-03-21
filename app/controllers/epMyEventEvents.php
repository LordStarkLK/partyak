<?php


class epMyEventEvents extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->epEventEvents = $this->model('eventPlannerEventEventsModel');
    }
    
    public function index($eventPageId){
        $data['ID']=$eventPageId;
        $data['eventDetails'] = $this->epEventEvents->getEventDetails($eventPageId);
        $this->view("eventPlanner/epMyEventEventsView",$data);

    }

}