<?php


class CustomerHome extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("customer");

        $this->AddFirstServiceModel = $this->model("CustomerBecomeVendorModel");

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
    public function checkVendor(){
        $id=$_SESSION['userId']; 
        $data['vendorch']=$this->AddFirstServiceModel->checkVendorDet($id);

        $this->view("customer/customerHomeView",$data);
    }

    // public function checkVendor(){
    //     $id=$_SESSION['userId']; 
    //     $data['vendorch']=$this->AddFirstServiceModel->checkVendorDet($id);
    //     $this->view("components/customerNavigation",$data);

    // }


    public function changePassword(){
        $data["status"] = "changePassword";
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        
        
        
        $this->view("customer/customerHomeView",$data);
    }



}