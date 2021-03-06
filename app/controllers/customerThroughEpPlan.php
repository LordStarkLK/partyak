<?php


class CustomerThroughEpPlan extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");

        //include this to call CRUD functions from the controller files
        $this->ThroughEpModel = $this->model("CustomerThroughEpPlanModel");

        $this->preventBack("customer");
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        
        //initilaize these varibles for server 

        $id=$_SESSION['userId'];

        $errors = array();
        $errors["eventType"] = "";
        $errors["eventname"] = "";
        $errors["startdate"] = "";
        //$errors["enddate"] = "";
        $errors["city"] = "";
        $errors["noofguest"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $eventType = $_POST["eventType"];
            $eventname = $_POST["eventname"];
            $startdate = $_POST["startdate"];
            $enddate = $_POST["enddate"];
            $city = $_POST["city"];
            $noofguest = $_POST["noofguest"];


            //Empty check
            if ($eventType == "null") $errors["eventType"] = "Event type is required";
            if (empty($eventname)) $errors["eventname"] = "Event name is required";
            if (empty($startdate)) $errors["startdate"] = "Event start Date is required";
            //if (empty($enddate)) $errors["enddate"] = "Event end Date is required";
            if ($city == "null") $errors["city"] ="Location is required";
            if (empty($noofguest)) $errors["noofguest"] = "No of guest is required";
    
        


            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                $this->ThroughEpModel->addEpEventDetail($eventType, $eventname, $startdate, $enddate, $city, $noofguest, $id);
            }


        }


        $data["errors"] = $errors;
        $data['eventDetail'] = $this->ThroughEpModel->getEventDetails($id);
        $this->view("customer/customerThroughEpPlanView", $data);
    }

}