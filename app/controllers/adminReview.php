<?php

class AdminReview extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->reviewModel = $this->model("adminReviewModel");
    }

    public function index(){
        $data["review"] = $this->reviewModel->getReview();
        $this->view("admin/adminReviewView",$data);
    }

    // search from the service
    public function search(){
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $_POST['searchTerm']);

        // echo $searchTerm;
        $userList = $this->reviewModel->search($searchTerm);
        echo $userList;
    }

}