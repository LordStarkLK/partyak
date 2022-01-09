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
                echo "Hi";
                $this->redirect("vendorHome");
            }else if($type == "customer"){
                $this->redirect("customerHome");
            }
        }else{
            // echo "Hi";

            $this->redirect("login");
            
        }
    
    }

    public function changePassword(){
        if(isset($_SESSION["userId"]) && isset($_SESSION["type"])){
            $type = $_SESSION["type"];

            if($type == "admin"){
                $this->redirect("adminDashboard");
            }else if($type == "vendor"){
                echo "Hi";
                $this->redirect("vendorHome/changePassword");
            }else if($type == "customer"){
                $this->redirect("customerHome/changePassword");
            }
        }else{
            // echo "Hi";

            $this->redirect("login");
            
        }
    }

}

