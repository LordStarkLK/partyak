<?php


class CustomerOnYourOwnPlan extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");

         //include this to call CRUD functions from the controller files
         $this->OnYourOwnModel = $this->model("CustomerOnYourOwnPlanModel");
         $this->OnYourOwnSModel = $this->model("customerOnYourOwnPlanSModel");

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
                $this->OnYourOwnModel->addEventDetail($eventType, $eventname, $startdate, $enddate, $city, $noofguest, $id);
            }


        }


        $data["errors"] = $errors;
        $this->view("customer/customerOnYourOwnPlanView", $data);
    }
   
    
    public function service_preference(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        $this->view("customer/customerOnYourOwnPlanSView");

        $id=$_SESSION['userId'];
        
        //initilaize these varibles for server 

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $Seating = isset($_POST["Seating"]) ? $_POST["Seating"] : 'no';
            $indoorAgree = isset($_POST["indoorAgree"]) ? $_POST["indoorAgree"] : 'no';
            $outdoorAgree = isset($_POST["outdoorAgree"]) ? $_POST["outdoorAgree"] : 'no';
            $danceAgree = isset($_POST["danceAgree"]) ? $_POST["danceAgree"] : 'no';
            $setiAgree = isset($_POST["setiAgree"]) ? $_POST["setiAgree"] : 'no';
            $poruwaAgree = isset($_POST["poruwaAgree"]) ? $_POST["poruwaAgree"] : 'no';
            $breakfAgree = isset($_POST["breakfAgree"]) ? $_POST["breakfAgree"] : 'no';
            $lunchAgree = isset($_POST["lunchAgree"]) ? $_POST["lunchAgree"] : 'no';
            $dinnerAgree = isset($_POST["dinnerAgree"]) ? $_POST["dinnerAgree"] : 'no';
            $teaAgree = isset($_POST["teaAgree"]) ? $_POST["teaAgree"] : 'no';
            $buffeAgree = isset($_POST["buffeAgree"]) ? $_POST["buffeAgree"] : 'no';
            $noServant = isset($_POST["noServant"]) ? $_POST["noServant"] : 'no';
            $budget = isset($_POST["budget"]) ? $_POST["budget"] : 'no';
            $photoDetails = isset($_POST["photoDetails"]) ? $_POST["photoDetails"] : 'no';
            $mbandAgree = isset($_POST["mbandAgree"]) ? $_POST["mbandAgree"] : 'no';
            $djAgree = isset($_POST["djAgree"]) ? $_POST["djAgree"] : 'no';
            $soloAgree = isset($_POST["soloAgree"]) ? $_POST["soloAgree"] : 'no';
            $kandyAgree = isset($_POST["kandyAgree"]) ? $_POST["kandyAgree"] : 'no';
            $lawAgree = isset($_POST["lawAgree"]) ? $_POST["lawAgree"] : 'no';
            $sabaAgree = isset($_POST["sabaAgree"]) ? $_POST["sabaAgree"] : 'no';
            $wesAgree = isset($_POST["wesAgree"]) ? $_POST["wesAgree"] : 'no';
            $SalonType = isset($_POST["SalonType"]) ? $_POST["SalonType"] : 'no';
            $hairAgree = isset($_POST["hairAgree"]) ? $_POST["hairAgree"] : 'no';
            $dressers = isset($_POST["dressers"]) ? $_POST["dressers"] : 'no';
            $makeupAgree = isset($_POST["makeupAgree"]) ? $_POST["makeupAgree"] : 'no';
            $wedAgree = isset($_POST["wedAgree"]) ? $_POST["wedAgree"] : 'no';
            $partyAgree = isset($_POST["partyAgree"]) ? $_POST["partyAgree"] : 'no';
            $sweetAgree = isset($_POST["sweetAgree"]) ? $_POST["sweetAgree"] : 'no';
            $sbackAgree = isset($_POST["sbackAgree"]) ? $_POST["sbackAgree"] : 'no';
            $floralAgree = isset($_POST["floralAgree"]) ? $_POST["floralAgree"] : 'no';
            $soundAgree = isset($_POST["soundAgree"]) ? $_POST["soundAgree"] : 'no';
            $lightAgree = isset($_POST["lightAgree"]) ? $_POST["lightAgree"] : 'no';
            $indooreAgree = isset($_POST["indooreAgree"]) ? $_POST["indooreAgree"] : 'no';
            $outdooreAgree = isset($_POST["outdooreAgree"]) ? $_POST["outdooreAgree"] : 'no';
            $maleAgree = isset($_POST["maleAgree"]) ? $_POST["maleAgree"] : 'no';
            $femaleAgree = isset($_POST["femaleAgree"]) ? $_POST["femaleAgree"] : 'no';
          
          

            //Insert data
            $this->OnYourOwnSModel->addEventServicePreference( $Seating ,$indoorAgree,$outdoorAgree, $danceAgree ,$setiAgree,$poruwaAgree,$breakfAgree,$lunchAgree ,$dinnerAgree ,$teaAgree, $buffeAgree ,$noServant, $budget ,$photoDetails, $mbandAgree, $djAgree ,$soloAgree,$kandyAgree, $lawAgree, $sabaAgree,$wesAgree ,$SalonType,$hairAgree ,$dressers,$makeupAgree,$wedAgree, $partyAgree , $sweetAgree,$sbackAgree, $floralAgree,$soundAgree ,$lightAgree ,$indooreAgree,$outdooreAgree,$maleAgree,$femaleAgree,  $id);
         

        }

    }

}