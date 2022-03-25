<?php

class SpReviewModel extends Database
{
    public function getUserType($id){
        $query = "SELECT `service_type` FROM `other_service` WHERE `service_id` = '$id' ";
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'],$query));
        return $result;
    }

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

    public function getReviewAverage($service_id){
        $query = " SELECT service_id FROM service_review WHERE service_id='$service_id'  ";
        $result = mysqli_query($GLOBALS['db'],$query);
        $numR = $result -> num_rows;
        
        $query2 = " SELECT SUM(ratedStar) AS total FROM service_review WHERE service_id='$service_id' ";
        $result2 = mysqli_query($GLOBALS['db'],$query2);
        $data = mysqli_fetch_array($result2);
        $total = $data["total"];

        // $avg = '';
        if($numR != 0)
        {
            if(is_nan(round(($total/$numR),1)))
            {
                $avg = 0;
            }
            else{
                $avg = $total/$numR ;
            }
        }
        else{
            $avg = 0;
        }
        
        return array(round($avg,1),$numR);
        
    }

    public function getStarCount($service_id){
        $query = " SELECT service_id FROM service_review WHERE service_id='$service_id'  ";
        $result = mysqli_query($GLOBALS['db'],$query);
        $numR = $result -> num_rows;

        $query1 = " SELECT service_id FROM service_review WHERE service_id = '$service_id' AND ratedStar = 1 ";
        $result1 = mysqli_query($GLOBALS['db'],$query1);
        $count1 = $result1 -> num_rows;

        $query2 = " SELECT service_id FROM service_review WHERE service_id = '$service_id' AND ratedStar = 2 ";
        $result2 = mysqli_query($GLOBALS['db'],$query2);
        $count2 = $result2 -> num_rows;

        $query3 = " SELECT service_id FROM service_review WHERE service_id = '$service_id' AND ratedStar = 3 ";
        $result3 = mysqli_query($GLOBALS['db'],$query3);
        $count3 = $result3 -> num_rows;

        $query4 = " SELECT service_id FROM service_review WHERE service_id = '$service_id' AND ratedStar = 4 ";
        $result4 = mysqli_query($GLOBALS['db'],$query4);
        $count4 = $result4 -> num_rows;

        $query5 = " SELECT service_id FROM service_review WHERE service_id = '$service_id' AND ratedStar = 5 ";
        $result5 = mysqli_query($GLOBALS['db'],$query5);
        $count5 = $result5 -> num_rows;

        return array($count1,$count2,$count3,$count4,$count5,$numR);
        
    }
   

}