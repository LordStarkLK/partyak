<?php


class CustomerContactEventPlanner extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->serviceDetails = $this->model('customerContactEventPlannerModel');
        // $this->eventPlaningId = $this->model('spServiceModel');
        $this->preventBack("customer");
    }
    
    public function index(...$planning_id){
        if(isset($planning_id[0])){
            echo "Hi";
        }
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        // $this->eventPlaningId->bookingDetEp($planning_id);
        $data['planning_id'] = $planning_id[0];
        $data['ep_detail'] = $this->serviceDetails->getEpDetails();
        $this->view("customer/customerContactEventPlannerView",$data);
    }

}