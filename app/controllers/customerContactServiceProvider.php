<?php


class CustomerContactServiceProvider extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->serviceDetails = $this->model('customerContactServiceProviderModel');
        $this->preventBack("customer");
        
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");


        $data['service_detail'] = $this->serviceDetails->getServiceDetails();
        $this->view("customer/customerContactServiceProviderView",$data);
    }

}