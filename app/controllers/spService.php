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
        // $serName = 'Avendra';

        $data['service'] = $this->ServiceModel->getServiceInfo($service_id);
        // $data['package_data'] = $this->ServiceModel->getPackageInfo($service_id);

        // $errors = array();
        // $errors["ratedStars"] = "";
        // $errors["review"] = "";

        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        //     $customId = $_POST["review"];
        //     $customName = $_POST["user_id"];
        //     $eventName = $_POST["ratedIndex"];
        //     $eventDate = $_POST["event_date"];
        // }


        // echo "Hi";
        $this->view("vendor/spServiceView", $data);
    }
}
