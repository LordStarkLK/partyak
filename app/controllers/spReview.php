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
        // echo "Hi";
        $data['review_data'] = $this->ReviewModel->getReviewDetails($service_id);
        $data['review_user'] = $this->ReviewModel->getReviewedUserDetails();
        $data['review_avg'] = $this->ReviewModel->getReviewAverage($service_id);
        $data['review_star'] = $this->ReviewModel->getStarCount($service_id);

        $this->view("vendor/spReviewView",$data);
    }

   

    
}