<?php

class epOnlyService extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack2("vendor","customer","admin");

        //include this to call CRUD functions from the controller files
        $this->epServiceModel = $this->model("epOnlyServiceModel");
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

        $data['service'] = $this->epServiceModel->getServiceInfo($service_id);
        $data['package_data'] = $this->epServiceModel->getPackageInfo($service_id);
        $data['review_status'] = $this->epServiceModel->checkReviewStatus($service_id, $id);
        $data['latest_review'] = $this->epServiceModel->getLatestReview($service_id);


        $this->view("eventPlanner/epOnlyServiceView", $data);
    }
    public function bookingDet(...$ids)
    {
        $id = $_SESSION['userId'];

        $errors = array();
        $errors["reservedate"] = "";

        $service_id = $ids[0];
        $eventType = $_POST["eventType"];
        $guestCount = $_POST["guestcount"];
        $reserveDate = $_POST["reservedate"];

        //Insert data
        $userId = $this->getSession("userId");
        if(isset($ids[1])){
            $planning_id = $ids[1];
            $this->epServiceModel->bookingDetailWithEvent($reserveDate,$eventType, $guestCount, $id, $service_id,$userId,$planning_id);
            $this->index($service_id,$planning_id);

        }else{
            $this->epServiceModel->bookingDetail($userId, $service_id,$reserveDate,$eventType, $guestCount);
            $this->index($service_id);
        }
        
    }
}