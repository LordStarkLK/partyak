<?php

class AdminRequestModel extends database {
    // pending services
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

    // rejected services
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

    // rejected services
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


    // accept the service
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

    // reject the service
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

    // service
    public function search($searchTerm){
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $searchTerm);
        $list = explode("_",$searchTerm);

        foreach($list as $searchTerm){
            $searchTerm = "%" . $searchTerm . "%";
            $query = "SELECT other_service.*,user.f_name,user.l_name FROM user,other_service WHERE user.user_id = other_service.user_id AND (other_service.service_name LIKE '$searchTerm') ORDER BY other_service.service_id DESC";
            // $query = "SELECT other_service.*,user.f_name,user.l_name  FROM user.user_id = other_service.user_id AND (other_service.service_name LIKE '$searchTerm') ORDER BY booking.booking_id DESC";
            $query = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($query) > 0)
                {
                    break;
                }

        }
        $output = "";
        if(mysqli_num_rows($query)== 0){
            $output .= "No services have been booked as the search term";
        }
        if(mysqli_num_rows($query)>0){
            $output .='<table>
            <tr>
            <th>Service Id</th>
            <th>Service Name </th>
            <th>Vendor Name</th>
            <th>Service Type</th>
            <th>Status</th>
            <th>More Options</th>

            </tr>';
            $x = 1;
                         while($row=mysqli_fetch_assoc($query)){
                            $id_name = 'myDropdown';
                            $class_name = 'accept';
                            $status_name = 'status';
                            
        
                            $class_name .= $x;
                            $id_name .= $x; 
                            $status_name .= $row['service_id'];
                            $output .='
                                <tr>
                                    <td>'.$row['service_id'].'</td>
                                    <td>'.$row['service_name'].'</td>
                                    <td>'.$row['f_name'].' '.$row['l_name'].'</td>
                                    <td>'.$row['service_type'].'</td>
                                    <td> <i class="fas fa-circle '.$row['status'].'"></i> '.$row['status'].'</td>
                                    <td>  
                                        <div class="btn-group">
                                        <div class="dropdown">
                                        <button onclick="myFunction('.$x.')" class="dropbtn">Change Status <i class="fas fa-caret-down"></i></button>
                                        <div id="'.$id_name.'" class="dropdown-content">
                                        <a class="accept-btn '.$row['service_id'].'">Accept</a>
                                        <a class="reject-btn '.$row['service_id'].'">Reject</a>
                                        
                                        </div>
                                        </div>
                                        <button>View Service page</button>
                                        </div>

    
                                    </td>

                                </tr>



                            ';
                            $x++;
                        
            }
        }

        return $output;
    }


//     public function getServiceDetails(){
//         $query = "SELECT "
//     }
}