<?php

class EPNoteNewAdd extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->epNoteNewAdd = $this->model("EventPlannerNewNoteAddModel");
    }

    public function index($service_id)
    {
        $data['service_id']=$service_id;
        $this->view("eventPlanner/epNoteNewAddView",$data);
    }
    public function insertNote(){

    }

}
