<?php


class CustomerMyEvent extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('customerMyEventModel');
        $this->preventBack("customer");
    }
    
    public function index(){

        $id=$_SESSION['userId'];

        $data['eventDetail'] = $this->user->getEventDetails($id);
        $this->view("customer/customerMyEventView", $data);
    }

    public function deleteEvent($planning_id){
        $this->user->deleteEvent($planning_id);
        $this->redirect("customerMyEvent");
    }

}