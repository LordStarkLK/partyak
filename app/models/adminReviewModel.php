<?php

class AdminReviewModel extends database{
    public function getReview(){
        $query = "SELECT service_review.*,other_service.service_name,user.f_name,user.l_name FROM service_review,other_service,user WHERE other_service.service_id = service_review.service_id AND user.user_id = service_review.user_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;

    }

    public function search($searchTerm){
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $searchTerm);
        $list = explode("_",$searchTerm);

        foreach($list as $searchTerm){
            $searchTerm = "%" . $searchTerm . "%";
            $query = "SELECT service_review.*,other_service.service_name,user.f_name,user.l_name  FROM service_review,other_service,user WHERE other_service.service_id = service_review.service_id AND user.user_id = service_review.user_id AND (other_service.service_name LIKE '$searchTerm')";
            $query = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($query) > 0)
                {
                    break;
                }

        }
        // output to echo to review js file (ajax)
        $output = "";
        if(mysqli_num_rows($query)== 0){
            $output .= "No service reviews available as the search term";
        }
        if(mysqli_num_rows($query)>0){
            $output .='<table>
                <tr>
                <th>Review ID</th>
                <th>Service Name</th>
                <th>Reviewed By</th>
                <th>Rating</th>
                <th id="review">Review</th>

                </tr>';
                $checked = "checked";
                $notchecked = "";
                    
            while($row = mysqli_fetch_assoc($query)){
                $output .= '
                <td>'.$row['review_id'].'</td>
                                <td>'.$row['service_name'].'</td>
                                <td>'.$row['f_name'].' '.$row['l_name'].'</td>
                                <td class = "'.$row['ratedStar'].' ">
                                <span class="fa fa-star '.(($row['ratedStar']>=1)?$checked:$notchecked).'"></span>
                                <span class="fa fa-star '.(($row['ratedStar']>=2)?$checked:$notchecked).'"></span>
                                <span class="fa fa-star '.(($row['ratedStar']>=3)?$checked:$notchecked).'"></span>
                                <span class="fa fa-star '.(($row['ratedStar']>=4)?$checked:$notchecked).'"></span>
                                <span class="fa fa-star '.(($row['ratedStar']>=5)?$checked:$notchecked).'"></span>
                            </td>
                                <td>'.$row['textReview'].'</td>
                                
                            </tr>
                            


                ';
              
            }
        }

        return $output;
    }

}