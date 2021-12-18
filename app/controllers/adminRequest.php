<?php

class AdminRequest extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->requestModel = $this->model("adminRequestModel");
    }

    public function index(){
        $data['services'] = $this->requestModel->getRequests();
        $data['userId'] = $this->requestModel->getUserId();
        $this->view("admin/adminRequestView",$data);

    }

    public function accept($service_id){
        $output = $this->requestModel->acceptStatus($service_id);
        echo $output;
    }

    public function reject($service_id){
        $output = $this->requestModel->rejectStatus($service_id);
        echo $output;
    }

    public function accepted(){
        $data['services'] = $this->requestModel->getAccepted();
        $data['userId'] = $this->requestModel->getAcceptedUser();

        $this->view("admin/adminRequestAcceptedView",$data);
    }

    public function rejected(){
        $data['services'] = $this->requestModel->getRejected();
        $data['userId'] = $this->requestModel->getRejectedUser();

        $this->view("admin/adminRequestRejectedView",$data);

    }

}


?>
