<?php

class SpReviewModel extends Database
{

    public function getReviewDetails($service_id){
        $query = " SELECT user_id, ratedStar, textReview, Date FROM service_review WHERE service_id = '$service_id' ";

        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getReviewedUserDetails(){
        $query = " SELECT user.f_name, user.profilePicture FROM service_review, user WHERE service_review.user_id = user.user_id ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
   

}