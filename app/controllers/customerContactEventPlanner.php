<?php


class CustomerContactEventPlanner extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->serviceDetails = $this->model('customerContactEventPlannerModel');
        // $this->eventPlaningId = $this->model('spServiceModel');
        $this->preventBack("customer");
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        // $this->eventPlaningId->bookingDetEp($planning_id);
        $data['ep_detail'] = $this->serviceDetails->getEpDetails();
        $this->view("customer/customerContactEventPlannerView",$data);
    }

}