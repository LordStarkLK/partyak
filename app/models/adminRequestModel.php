<?php

class AdminRequestModel extends database {
    public function getRequests(){
        $query = "SELECT * from other_service WHERE status = 'pending' ORDER BY service_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
        // if(mysqli_num_rows($result)>0){
        //     return $result;
        // }
    }

    public function getUserId(){
        $query = "SELECT user.f_name, user.l_name from user,other_service WHERE user.user_id = other_service.user_id AND other_service.status = 'pending' ORDER BY other_service.service_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }

    public function getRejected(){
        $query = "SELECT * from other_service WHERE status = 'rejected' ORDER BY service_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    public function getRejectedUser(){
        $query = "SELECT user.f_name, user.l_name from user,other_service WHERE user.user_id = other_service.user_id AND other_service.status = 'rejected' ORDER BY other_service.service_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }else{
            return $result;
        }
        
    }


    public function getAccepted(){
        $query = "SELECT * from other_service WHERE status = 'accepted' ORDER BY service_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    public function getAcceptedUser(){
        $query = "SELECT user.f_name, user.l_name from user,other_service WHERE user.user_id = other_service.user_id AND other_service.status = 'accepted' ORDER BY other_service.service_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
        
    }



    public function acceptStatus($service_id){
        $query = "UPDATE other_service SET status = 'accepted' WHERE service_id = '$service_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        // should be the html to change the table row column to accepted status
        $output = 'pending';
        if($result>0){
            $output = ' <i class="fas fa-circle accdot"></i> accepted';
        }

        return $output;

        
    }


    public function rejectStatus($service_id){
        $query = "UPDATE other_service SET status = 'rejected' WHERE service_id = '$service_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        // should be the html to change the table row column to accepted status
        $output = 'pending';
        if($result>0){
            $output = ' <i class="fas fa-circle rejdot"></i> rejected';
        }

        return $output;

        
    }

//     public function getServiceDetails(){
//         $query = "SELECT "
//     }
}