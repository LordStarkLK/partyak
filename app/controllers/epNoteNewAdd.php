<?php

class EPNoteNewAdd extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->epNoteNewAdd = $this->model("EventPlannerNewNoteAddModel");
    }

    public function index($booking_id,$status)
    {
        $data['booking_id']=$booking_id;
        $data['status']=$status;
        $this->view("eventPlanner/epNoteNewAddView",$data);
    }
    public function insertNote(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $recmndSerName = $_POST["recmndSerName"];
            $serviceName = $_POST["service-name"];
            $AdvPayAmnt = $_POST["AdvPayAmnt"];
            $fulPaymnt = $_POST["fulPaymnt"];
            $pymntSts = $_POST["pymntSts"];
            $OthrSugst = $_POST["OthrSugst"];
            $bookingId = $_POST["bookingId"];

            $this->epNoteNewAdd->insertNote($recmndSerName,$serviceName,$AdvPayAmnt,$fulPaymnt,$pymntSts,$OthrSugst,$bookingId);
            // $this->redirect("epNoteNew/index/$booking_id");
            $this->index($bookingId,1);
        }
    }

}
