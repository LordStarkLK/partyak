<?php


class CustomerMyEvent extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('customerMyEventModel');
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");

        $id=$_SESSION['userId'];


        $data['eventDetail'] = $this->user->getEventDetails($id);
        $this->view("customer/customerMyEventView", $data);
    }

}