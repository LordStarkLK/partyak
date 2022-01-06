<?php
class AdminUserModel extends database
{
    // public function getCustomers(){
    //     $query = "SELECT user_id,f_name,l_name FROM customer ORDER BY 'user_id'";
    //     $result = mysqli_query($GLOBALS['db'],$query);
    //     if(mysqli_num_rows($result) > 0){
    //         return $result;
    //     }
    // }

    public function getCustomerDetails(){
        $query = "SELECT * FROM user where user_type='customer' ORDER BY 'user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function deleteUser($user_id){
        $query = "DELETE FROM user WHERE user_id = '$user_id'";

        $result = mysqli_query($GLOBALS["db"], $query);
        return $result;
    }

    public function getUserProfile($id){
        $query = "SELECT * FROM user where user_id = '$id' LIMIT 1";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            return $user;
        }
    }

    public function vendorDetails($id){
        $query = "SELECT * FROM vendor where user_id = '$id' LIMIT 1";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            return $user;
        }
    }

    public function search($searchTerm){
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $searchTerm);
        $list = explode("_",$searchTerm);

        foreach($list as $searchTerm){
            $searchTerm = "%" . $searchTerm . "%";
            $query = "SELECT *  FROM user WHERE user_type = 'customer' AND (f_name LIKE '$searchTerm' OR l_name LIKE '$searchTerm' )";
            $query = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($query) > 0)
                {
                    break;
                }

        }
        $output = "";
        if(mysqli_num_rows($query)== 0){
            $output .= "No users available as the search term";
        }
        if(mysqli_num_rows($query)>0){
            $output .='<table>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>More Actions</th>

                </tr>';
            while($row = mysqli_fetch_assoc($query)){
                $i = 1;
                $output .= '
                <td>' .$row['user_id']. '</td>
                <td>' .$row['f_name'].'  '.$row['l_name'].'</td>
                
                <td>'.$row['email'].'</td>
                
                <td>  
                <div class="btn-group">
                    <button onclick=\'window.location="http://localhost/partyak/adminUserProfile/index/'.$row['user_id'].'"\'>View Profile</button>
            
                    <button onclick=\'window.location="http://localhost/partyak/adminUsers/deleteUser/'.$row['user_id'].'"\'>Delete User</button>
                    
                  </div>
            
                
                </td>
            </tr>       
                

                ';
                $i++;
            }
        }

        return $output;
    }

    



}