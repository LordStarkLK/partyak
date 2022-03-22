<?php


class CustomerContactEventPlanner extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->serviceDetails = $this->model('customerContactEventPlannerModel');
        $this->preventBack("customer");
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        $data['ep_detail'] = $this->serviceDetails->getEpDetails();
        $this->view("customer/customerContactEventPlannerView",$data);
    }

}