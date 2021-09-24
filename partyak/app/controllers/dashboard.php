<?php

class Dashboard extends FrameworkPartyak{
    public function __construct(){

    }
    
    public function index()
    {
        // echo "HI";
        if(isset($_SESSION["userId"]) && isset($_SESSION["type"])){
            $type = $_SESSION["type"];

            if($type == "admin"){
                $this->redirect("adminDashboard");
            }else if($type == "vendor"){
                $this->redirect("vendorHome");
            }else if($type == "customer"){
                $this->redirect("customerHome");
            }
        }else{
            // echo "Hi";

            $this->redirect("login");
            
        }
    
    }

}