<?php

class SpService extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack2();

        //include this to call CRUD functions from the controller files
        $this->ServiceModel = $this->model("SpServiceModel");
    }

    public function index($service_id)
    {


        $id = $_SESSION['userId'];
        // $serName = 'Avendra';

        $data['service'] = $this->ServiceModel->getServiceInfo($service_id);
        $data['package_data'] = $this->ServiceModel->getPackageInfo($service_id);

       
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

    public function bookingDet($service_id){

        $id=$_SESSION['userId'];
        
        // $serName = 'Avendra';

        $data['service'] = $this->ServiceModel->getServiceInfo($service_id);
        $data['package_data'] = $this->ServiceModel->getPackageInfo($service_id);

        $errors = array();
        $errors["reservedate"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $eventType = $_POST["eventType"];
            $guestCount = $_POST["guestcount"];
            $reserveDate = $_POST["reservedate"];
            $packageType = $_POST["packageType"];


            //Empty check
            if (empty($reserveDate)) $errors["reservedate"] = "Event Date is required";

            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                $this->ServiceModel->bookingDetail($eventType, $guestCount, $reserveDate, $packageType, $id,$service_id);
                // $this->redirect('spService');
            }


        }
        $data["errors"] = $errors;
        $this->view("vendor/spServiceView", $data);

    }
}
