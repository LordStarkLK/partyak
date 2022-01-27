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
}