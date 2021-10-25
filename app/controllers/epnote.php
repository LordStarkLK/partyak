<?php

class epNote extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->note = $this->model('EventPlannerNoteModel');
    }
    public function index()
    {

        $data['note'] = $this->note->getNotes();
        $this->view("eventPlanner/epNoteView", $data);
    }
}
