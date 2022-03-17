<?php


class epMyEventEvents extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
    }
    
    public function index(){
        $this->view("eventPlanner/epMyEventEventsView");
    }

}