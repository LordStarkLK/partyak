<?php

class EPNotePage extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->epNotePage = $this->model('EventPlannerNotePageModel');
    }

    public function index($bookingId,$planning_id)
    {
        $id=$_SESSION['userId'];
        $data['noteDetails'] = $this->epNotePage->getNotes($bookingId);
        $data['bookingId']=$bookingId;
        $data['planning_id']=$planning_id;
        $this->view("eventPlanner/epNotePageView",$data);
    }

}