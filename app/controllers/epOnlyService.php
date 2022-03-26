<?php

class epOnlyService extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack2();

        //include this to call CRUD functions from the controller files
        $this->epServiceModel = $this->model("epOnlyServiceModel");
    }

    public function index($service_id)
    {
        $id = $_SESSION['userId'];

        $data['service'] = $this->epServiceModel->getServiceInfo($service_id);
        $data['package_data'] = $this->epServiceModel->getPackageInfo($service_id);
        $data['review_status'] = $this->epServiceModel->checkReviewStatus($service_id, $id);
        $data['latest_review'] = $this->epServiceModel->getLatestReview($service_id);


        $this->view("eventPlanner/epOnlyServiceView", $data);
    }
    public function bookingDet($service_id)
    {
        $id = $_SESSION['userId'];
        $eventType = $_POST["eventType"];
        $guestCount = $_POST["guestcount"];
        $reserveDate = $_POST["reservedate"];
        $this->epServiceModel->bookingDetail($id, $service_id,$reserveDate,$eventType, $guestCount);
        $this->index($service_id);
    }
}