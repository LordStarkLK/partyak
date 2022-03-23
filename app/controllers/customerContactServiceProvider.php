<?php


class CustomerContactServiceProvider extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->serviceDetails = $this->model('customerContactServiceProviderModel');
        $this->preventBack("customer");
        
    }
    
    public function index(){
        $searchV =isset($_POST["searchV"]) ? $_POST["searchV"] : 'NULL';
        $data['service_detail']=$this->serviceDetails->getSearchVDetails($searchV);

        $this->view("customer/customerContactServiceProviderView",$data);
    }

    
    public function getEp(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $data['ep_detail'] = $this->serviceDetails->getEpDetails($city);

        $this->view("customer/customerContactEpView",$data);
    }
        

    public function getVh(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $Seating = isset($_POST["Seating"]) ? $_POST["Seating"] : 'null';
        $indoorAgree = isset($_POST["indoorAgree"] ) ? $_POST["indoorAgree"] : 'null';
        $outdoorAgree = isset($_POST["outdoorAgree"]) ? $_POST["outdoorAgree"] : 'null';
        $danceAgree = isset($_POST["danceAgree"]) ? $_POST["danceAgree"] : 'null';
        $setiAgree = isset($_POST["setiAgree"]) ? $_POST["setiAgree"] : 'null';
        $poruwaAgree = isset($_POST["poruwaAgree"]) ? $_POST["poruwaAgree"] : 'null';
        $data['venue_detail'] = $this->serviceDetails->getVenueDetails($city,$Seating,$indoorAgree,$outdoorAgree,$danceAgree,$setiAgree,$poruwaAgree);

        $this->view("customer/customerContactVhView",$data);
    }
        

    public function getCate(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $data['cate_detail'] = $this->serviceDetails->getCateDetails($city);

        $this->view("customer/customerContactCsView",$data);

    }
        

    public function getPhoto(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $data['photo_detail'] = $this->serviceDetails->getPhotoDetails($city);

        $this->view("customer/customerContactPView",$data);

    }

    public function getMusic(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $mbandAgree = isset($_POST["mbandAgree"]) ? $_POST["mbandAgree"] : 'null';
        $djAgree = isset($_POST["djAgree"]) ? $_POST["djAgree"] : 'null';
        $soloAgree = isset($_POST["soloAgree"]) ? $_POST["soloAgree"] : 'null';
        $data['music_detail'] = $this->serviceDetails->getMusicDetails($city,$mbandAgree,$djAgree,$soloAgree);

        $this->view("customer/customerContactMSView",$data);

    }
        

    public function getDance(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $kandyAgree = isset($_POST["kandyAgree"]) ? $_POST["kandyAgree"] : 'null';
        $lawAgree = isset($_POST["lawAgree"]) ? $_POST["lawAgree"] : 'null';
        $sabaAgree = isset($_POST["sabaAgree"]) ? $_POST["sabaAgree"] : 'null';
        $wesAgree = isset($_POST["wesAgree"]) ? $_POST["wesAgree"] : 'null';
        $data['dance_detail'] = $this->serviceDetails->getDanceDetails($city, $kandyAgree,$lawAgree,$sabaAgree,$wesAgree);

        $this->view("customer/customerContactDGView",$data);
    }


    public function getSalon(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $gender =isset($_POST["gender"]) ? $_POST["gender"] : 'null';
        $data['salon_detail'] = $this->serviceDetails->getSalonDetails($city,$gender);
    
        $this->view("customer/customerContactSView",$data);
    }


    public function getCakeDetails(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $wedAgree = isset($_POST["wedAgree"]) ? $_POST["wedAgree"] : 'null';
        $partyAgree = isset($_POST["partyAgree"]) ? $_POST["partyAgree"] : 'null';
        $sweetAgree = isset($_POST["sweetAgree"]) ? $_POST["sweetAgree"] : 'null';
        $data['cake_detail'] = $this->serviceDetails->getCakeDetails($city,$wedAgree,$partyAgree,$sweetAgree);

        $this->view("customer/customerContactCeView",$data);
    }
        

    public function getDeco(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $sbackAgree = isset($_POST["sbackAgree"]) ? $_POST["sbackAgree"] : 'null';
        $floralAgree = isset($_POST["floralAgree"]) ? $_POST["floralAgree"] : 'null';
        $data['deco_detail'] = $this->serviceDetails->getDecoDetails($city,$sbackAgree,$floralAgree);

        $this->view("customer/customerContactDrView",$data);
    }
        

    public function getSound(){
        // $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        // $soundAgree = isset($_POST["soundAgree"]) ? $_POST["soundAgree"] : 'null';
        // $lightAgree = isset($_POST["lightAgree"]) ? $_POST["lightAgree"] : 'null';
        // $indooreAgree = isset($_POST["indooreAgree"]) ? $_POST["indooreAgree"] : 'null';
        // $outdooreAgree = isset($_POST["outdooreAgree"]) ? $_POST["outdooreAgree"] : 'null';
        $data['sound_detail'] = $this->serviceDetails->getSoundDetails();

        $this->view("customer/customerContactSLView",$data);
    }

    public function getDress(){
        $city =isset($_POST["city"]) ? $_POST["city"] : 'null';
        $maleAgree = isset($_POST["maleAgree"]) ? $_POST["maleAgree"] : 'no';
        $femaleAgree = isset($_POST["femaleAgree"]) ? $_POST["femaleAgree"] : 'no';
        $data['dress_detail'] = $this->serviceDetails->getDressDetails($city,$maleAgree,$femaleAgree);

        $this->view("customer/customerContactDuView",$data);
    }
     

}