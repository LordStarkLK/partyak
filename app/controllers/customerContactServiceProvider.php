<?php


class CustomerContactServiceProvider extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        $this->view("customer/customerContactServiceProviderView");
    }

}