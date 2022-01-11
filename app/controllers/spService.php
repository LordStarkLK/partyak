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
        $data['review_status'] = $this->ServiceModel->checkReviewStatus($service_id, $id);
        $data['latest_review'] = $this->ServiceModel->getLatestReview($service_id);


        // echo "Hi";
        $this->view("vendor/spServiceView", $data);
    }
    public function insertReview($service_id)
    {
        $id = $_SESSION['userId'];

        //review insert starts
        $errors = array();
        $errors["ratedStars"] = "";
        $errors["textReview"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $ratedStars = $_POST["ratedIndex"];
            $textReview = $_POST["review"];


            //Empty check
            if (empty($ratedStars)) $errors["ratedStars"] = "Give a star rate";
            if (empty($textReview)) $errors["textReview"] = "Leave your review";


            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                $this->ServiceModel->insertReview($ratedStars,  $textReview, $id, $service_id);
                $this->index($service_id);
            }
            //review insert ends
        }
        $data["errors"] = $errors;
        $this->index($service_id);
    }
    public function alterReview($service_id)
    {
        $id = $_SESSION['userId'];

        //review insert starts
        $errors = array();
        $errors["ratedStars"] = "";
        $errors["textReview"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $ratedStars = $_POST["ratedIndex"];
            $textReview = $_POST["review"];


            //Empty check
            if (empty($ratedStars)) $errors["ratedStars"] = "Give a star rate";
            if (empty($textReview)) $errors["textReview"] = "Leave your review";


            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                $this->ServiceModel->alterReview($ratedStars,  $textReview, $id, $service_id);
                $this->index($service_id);
            }
            //review insert ends
        }
        $data["errors"] = $errors;
        echo "There was an error";
        $this->index($service_id);
    }
    public function bookingDet($service_id)
    {

        $id = $_SESSION['userId'];

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
                $this->ServiceModel->bookingDetail($eventType, $guestCount, $reserveDate, $packageType, $id, $service_id);
                $this->index($service_id);
                // $this->redirect('spService');
            }
        }
        $data["errors"] = $errors;
        $this->index($service_id);
    }
}
