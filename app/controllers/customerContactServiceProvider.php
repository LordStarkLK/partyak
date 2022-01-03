<?php


class CustomerContactServiceProvider extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->serviceDetails = $this->model('customerContactServiceProviderModel');
        $this->preventBack("customer");
        
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");


        $data['service_detail'] = $this->serviceDetails->getServiceDetails();
        $data['ep_detail'] = $this->serviceDetails->getEpDetails();
        $data['venue_detail'] = $this->serviceDetails->getVenueDetails();
        $data['cate_detail'] = $this->serviceDetails->getCateDetails();
        $data['photo_detail'] = $this->serviceDetails->getPhotoDetails();
        $data['music_detail'] = $this->serviceDetails->getMusicDetails();
        $data['dance_detail'] = $this->serviceDetails->getDanceDetails();
        $data['salon_detail'] = $this->serviceDetails->getSalonDetails();
        $data['cake_detail'] = $this->serviceDetails->getCakeDetails();
        $data['deco_detail'] = $this->serviceDetails->getDecoDetails();
        $data['sound_detail'] = $this->serviceDetails->getSoundDetails();
        $data['dress_detail'] = $this->serviceDetails->getDressDetails();
        $this->view("customer/customerContactServiceProviderView",$data);
    }

}