<?php


class CustomerHome extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("customer");
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        
        
        
        $this->view("customer/customerHomeView");
    }

    public function newReg(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        $data["status"] = "new";
        
        
        $this->view("customer/customerHomeView",$data);
    }

}