<?php


class HowItWork extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user= $this->model('howItWorkModel');
    }
    
    public function index(){
        $data['intro'] = $this->user->getIntro();
        $data['main_heading_unique'] = $this->user->getMainHeadingUnique();
        $data['unique_features'] = $this->user->getUniqueFeatures();
        $data['steps'] = $this->user->getSteps();
        $data['vendor_details'] = $this->user->getVendorDetails();
        $data['customer_details'] = $this->user->getCustomerDetails();

        $this->view("howItWorkView",$data);

    }

}