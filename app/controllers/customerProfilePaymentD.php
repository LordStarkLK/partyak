<?php


class CustomerProfilePaymentD extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");

        $this->preventBack2("customer","vendor");
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        $this->view("customer/customerProfilePaymentDView");
    }

}