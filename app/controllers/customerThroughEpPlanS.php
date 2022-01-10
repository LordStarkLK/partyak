<?php


class CustomerThroughEpPlanS extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");

        //include this to call CRUD functions from the controller files
        $this->ThroughEpSModel = $this->model("customerThroughEpPlanSModel");

        $this->preventBack("customer");
    }

    
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");
        $this->view("customer/customerThroughEpPlanSView");
        
        $id=$_SESSION['userId'];



        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $Seating = isset($_POST["Seating"]) ? $_POST["Seating"] : 'no';
            $indoorAgree = isset($_POST["indoorAgree"]) ? $_POST["indoorAgree"] : 'no';
            $outdoorAgree = isset($_POST["outdoorAgree"]) ? $_POST["outdoorAgree"] : 'no';
            $danceAgree = isset($_POST["danceAgree"]) ? $_POST["danceAgree"] : 'no';
            $setiAgree = isset($_POST["setiAgree"]) ? $_POST["setiAgree"] : 'no';
            $poruwaAgree = isset($_POST["poruwaAgree"]) ? $_POST["poruwaAgree"] : 'no';
            $venueAgree = isset($_POST["venueAgree"]) ? $_POST["venueAgree"] : 'no';
            $breakfAgree = isset($_POST["breakfAgree"]) ? $_POST["breakfAgree"] : 'no';
            $lunchAgree = isset($_POST["lunchAgree"]) ? $_POST["lunchAgree"] : 'no';
            $dinnerAgree = isset($_POST["dinnerAgree"]) ? $_POST["dinnerAgree"] : 'no';
            $teaAgree = isset($_POST["teaAgree"]) ? $_POST["teaAgree"] : 'no';
            $buffeAgree = isset($_POST["buffeAgree"]) ? $_POST["buffeAgree"] : 'no';
            $noServant = isset($_POST["noServant"]) ? $_POST["noServant"] : 'no';
            $cateringAgree = isset($_POST["cateringAgree"]) ? $_POST["cateringAgree"] : 'no';
            $budget = isset($_POST["budget"]) ? $_POST["budget"] : 'no';
            $photoDetails = isset($_POST["photoDetails"]) ? $_POST["photoDetails"] : 'no';
            $photoAgree = isset($_POST["photoAgree"]) ? $_POST["photoAgree"] : 'no';
            $mbandAgree = isset($_POST["mbandAgree"]) ? $_POST["mbandAgree"] : 'no';
            $djAgree = isset($_POST["djAgree"]) ? $_POST["djAgree"] : 'no';
            $soloAgree = isset($_POST["soloAgree"]) ? $_POST["soloAgree"] : 'no';
            $musicAgree = isset($_POST["musicAgree"]) ? $_POST["musicAgree"] : 'no';
            $kandyAgree = isset($_POST["kandyAgree"]) ? $_POST["kandyAgree"] : 'no';
            $lawAgree = isset($_POST["lawAgree"]) ? $_POST["lawAgree"] : 'no';
            $sabaAgree = isset($_POST["sabaAgree"]) ? $_POST["sabaAgree"] : 'no';
            $wesAgree = isset($_POST["wesAgree"]) ? $_POST["wesAgree"] : 'no';
            $dancesAgree = isset($_POST["dancesAgree"]) ? $_POST["dancesAgree"] : 'no';
            $SalonType = isset($_POST["SalonType"]) ? $_POST["SalonType"] : 'no';
            $hairAgree = isset($_POST["hairAgree"]) ? $_POST["hairAgree"] : 'no';
            $dressers = isset($_POST["dressers"]) ? $_POST["dressers"] : 'no';
            $makeupAgree = isset($_POST["makeupAgree"]) ? $_POST["makeupAgree"] : 'no';
            $salonAgree = isset($_POST["salonAgree"]) ? $_POST["salonAgree"] : 'no';
            $wedAgree = isset($_POST["wedAgree"]) ? $_POST["wedAgree"] : 'no';
            $partyAgree = isset($_POST["partyAgree"]) ? $_POST["partyAgree"] : 'no';
            $sweetAgree = isset($_POST["sweetAgree"]) ? $_POST["sweetAgree"] : 'no';
            $cakeAgree = isset($_POST["cakeAgree"]) ? $_POST["cakeAgree"] : 'no';
            $sbackAgree = isset($_POST["sbackAgree"]) ? $_POST["sbackAgree"] : 'no';
            $floralAgree = isset($_POST["floralAgree"]) ? $_POST["floralAgree"] : 'no';
            $decoAgree = isset($_POST["decoAgree"]) ? $_POST["decoAgree"] : 'no';
            $soundAgree = isset($_POST["soundAgree"]) ? $_POST["soundAgree"] : 'no';
            $lightAgree = isset($_POST["lightAgree"]) ? $_POST["lightAgree"] : 'no';
            $indooreAgree = isset($_POST["indooreAgree"]) ? $_POST["indooreAgree"] : 'no';
            $outdooreAgree = isset($_POST["outdooreAgree"]) ? $_POST["outdooreAgree"] : 'no';
            $soundsAgree = isset($_POST["soundsAgree"]) ? $_POST["soundsAgree"] : 'no';
            $maleAgree = isset($_POST["maleAgree"]) ? $_POST["maleAgree"] : 'no';
            $femaleAgree = isset($_POST["femaleAgree"]) ? $_POST["femaleAgree"] : 'no';
            $dressAgree = isset($_POST["dressAgree"]) ? $_POST["dressAgree"] : 'no';
          
          

            //Insert data
            $this->ThroughEpSModel->addEventEpServicePreference( $Seating ,$indoorAgree,$outdoorAgree, $danceAgree ,$setiAgree,$poruwaAgree,$venueAgree,$breakfAgree,$lunchAgree ,$dinnerAgree ,$teaAgree, $buffeAgree ,$noServant,$cateringAgree, $budget ,$photoDetails,$photoAgree, $mbandAgree, $djAgree ,$soloAgree,$musicAgree,$kandyAgree, $lawAgree, $sabaAgree,$wesAgree ,$dancesAgree,$SalonType,$hairAgree ,$dressers,$makeupAgree,$salonAgree,$wedAgree, $partyAgree , $sweetAgree,$cakeAgree,$sbackAgree, $floralAgree,$decoAgree,$soundAgree ,$lightAgree ,$indooreAgree,$outdooreAgree,$soundsAgree,$maleAgree,$femaleAgree,$dressAgree,$id);
         

        }
    }

}