<?php

class AdminReviewModel extends database{
    public function getReview(){
        $query = "SELECT service_review.*,other_service.service_name,user.f_name,user.l_name FROM service_review,other_service,user WHERE other_service.service_id = service_review.service_id AND user.user_id = service_review.user_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;

    }
}