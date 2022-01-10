<?php


class CustomerEventSB extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("customer");
        $this->user = $this->model('customerEventSBModel');
    }
    
    public function index($planning_id){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");

        $data['event']= $this->user->getEventDetails($planning_id);
        $data['service']= $this->user->getServicePDetails($planning_id);
        $this->view("customer/customerEventSBView",$data);
    }

}