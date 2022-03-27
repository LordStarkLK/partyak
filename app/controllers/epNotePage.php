<?php

class EPNotePage extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->epNotePage = $this->model('EventPlannerNotePageModel');
    }

    public function index($bookingId)
    {
        $id=$_SESSION['userId'];
        $data['noteDetails'] = $this->epNotePage->getNotes($bookingId);
        $data['bookingId']=$bookingId;
        $this->view("eventPlanner/epNotePageView",$data);
    }

}