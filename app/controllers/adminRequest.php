<?php

class AdminRequest extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->requestModel = $this->model("adminRequestModel");
    }

    public function index(){
        // get pending services
        $data['services'] = $this->requestModel->getRequests();
        $data['userId'] = $this->requestModel->getUserId();
        $this->view("admin/adminRequestView",$data);

    }

    public function accept($service_id){
        // change to accepted status
        $output = $this->requestModel->acceptStatus($service_id);
        echo $output;
    }

    public function reject($service_id){
        // change to rejected status
        $output = $this->requestModel->rejectStatus($service_id);
        echo $output;
    }

    // show accepted services
    public function accepted(){
        $data['services'] = $this->requestModel->getAccepted();
        $data['userId'] = $this->requestModel->getAcceptedUser();

        $this->view("admin/adminRequestAcceptedView",$data);
    }
    // show rejected services
    public function rejected(){
        $data['services'] = $this->requestModel->getRejected();
        $data['userId'] = $this->requestModel->getRejectedUser();

        $this->view("admin/adminRequestRejectedView",$data);

    }


    public function search(){
        // post getting from payment js file
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $_POST['searchTerm']);

        // echo $searchTerm;
        $userList = $this->requestModel->search($searchTerm);
        echo $userList;
    }


}


?>
