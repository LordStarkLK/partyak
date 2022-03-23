<?php

class EPNoteNew extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->epNote = $this->model('EventPlannerNewNoteModel');
    }

    public function index($service_id)
    {
        $data['service_id']=$service_id;

        $id=$_SESSION['userId'];
        $data['userType'] = $this->epNote->getUserType($id);

        $this->view("eventPlanner/epNoteNewView",$data);
    }
}
