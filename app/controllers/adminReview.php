<?php

class AdminReview extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
    }

    public function index(){
        $this->view("admin/adminReviewView");
    }
}