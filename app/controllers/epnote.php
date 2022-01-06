<?php

class EpNote extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");

        $this->preventBack("vendor");

        $this->note = $this->model('EventPlannerNoteModel');
    }
    public function index()
    {
        $data['noteBody'] = $this->note->getNoteBody();
        $data['note'] = $this->note->getNotes();
        $this->view("eventPlanner/epNoteView", $data);
    }
    public function insertNoteBody()
    {
        $noteIdVendor = $_POST["noteId"];
        $noteBody = $_POST["noteBody"];
        $this->note->insertNoteVendor($noteIdVendor, $noteBody);
        $this->index();
    }
    public function deleteNote()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $noteId = $_POST["noteId"];
            $this->note->deleteNotes($noteId);
            $this->index();
        }
    }
    public function deleteNoteBody()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vendorNoteId = $_POST["vendorNoteId"];
            $this->note->deleteNoteBody($vendorNoteId);
            $this->index();
        }
    }

}

