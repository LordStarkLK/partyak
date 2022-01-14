<?php

class AdminReview extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->model("adminReviewModel");
    }

    public function index(){
        $this->view("admin/adminReviewView");
    }
}