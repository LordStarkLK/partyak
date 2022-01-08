<?php

class SpService extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");

        //include this to call CRUD functions from the controller files
        $this->ServiceModel = $this->model("SpServiceModel");
        
    }

    public function index($service_id)
    {

        $id=$_SESSION['userId'];
        // $serName = 'Avendra';

        $data['service'] = $this->ServiceModel->getServiceInfo($service_id);
        $data['package_data'] = $this->ServiceModel->getPackageInfo($service_id);


        
        // echo "Hi";
        $this->view("vendor/spServiceView", $data);
    }

   
}