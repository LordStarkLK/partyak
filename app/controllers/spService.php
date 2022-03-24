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

    public function index(...$ids)
    {
        $service_id = $ids[0];
        if(isset($ids[1])){
            // $planning_id = $ids[1];
            $data['planning_id'] = $ids[1];
        }
        $id = $_SESSION['userId'];

        $data['service_id'] = $service_id;
        // $serName = 'Avendra';


        $data['service'] = $this->ServiceModel->getServiceInfo($service_id);
        $data['package_data'] = $this->ServiceModel->getPackageInfo($service_id);
        $data['review_status'] = $this->ServiceModel->checkReviewStatus($service_id, $id);
        $data['latest_review'] = $this->ServiceModel->getLatestReview($service_id);


        $this->view("vendor/spServiceView", $data);
    }

    //Review
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
                $this->ServiceModel->insertReview($textReview, $ratedStars, $id, $service_id);
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
                $this->ServiceModel->alterReview($ratedStars, $textReview, $id, $service_id);
                $this->index($service_id);
            }
            //review insert ends
        }
        $data["errors"] = $errors;
        echo "There was an error";
        $this->index($service_id);
    }


    //Get booking details
    public function bookingDet(...$ids)
    {
        $id = $_SESSION['userId'];

        $errors = array();
        $errors["reservedate"] = "";

        $service_id = $ids[0];
        

        

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
                $userId = $this->getSession("userId");
                if(isset($ids[1])){
                    $planning_id = $ids[1];
                    $this->ServiceModel->bookingDetailWithEvent($eventType, $guestCount, $reserveDate, $packageType, $id, $service_id,$userId,$planning_id);
                    $this->index($service_id,$planning_id);

                }else{
                    $this->ServiceModel->bookingDetail($eventType, $guestCount, $reserveDate, $packageType, $id, $service_id,$userId);
                    $this->index($service_id);
                }
                
                
                // $this->redirect('spService');
            }
        }
        $data["errors"] = $errors;
        $this->index($service_id);
    }


    //Get booking details for event planner the request coming from through planning event
    public function bookingDetEp($service_id)

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
                $userId = $this->getSession("userId");
                $this->ServiceModel->bookingDetail($eventType, $guestCount, $reserveDate, $packageType, $id, $service_id,$userId);
                $this->index($service_id);
                // $this->redirect('spService');
            }
        }
        $data["errors"] = $errors;
        $this->index($service_id);
    }
}
