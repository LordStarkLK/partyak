<?php

class SpReview extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        
        $this->ReviewModel = $this->Model("spReviewModel");
    }

    public function index($service_id)
    {
        $data['service_id'] = $service_id;
        $id=$_SESSION['userId'];
        $data['userType'] = $this->ReviewModel->getUserType($service_id);
        // echo "Hi";
        $data['review_data'] = $this->ReviewModel->getReviewDetails($service_id);
        $data['review_user'] = $this->ReviewModel->getReviewedUserDetails();
        $this->view("vendor/spReviewView",$data);
    }

   

    
}