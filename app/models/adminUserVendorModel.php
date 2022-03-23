<?php
class AdminUserVendorModel extends database
{
    public function getService(){
        $query = "SELECT user_id,f_name,l_name FROM vendor WHERE vendor_type = 'service' ORDER BY user_id DESC LIMIT 5";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getServiceEmail(){
        $query = "SELECT user.email FROM user,vendor WHERE user.user_id = vendor.user_id AND vendor.vendor_type = 'service'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }

    }

    public function getVendorDetails(){
        $query = "SELECT * FROM user WHERE user_type = 'vendor'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }

     

    public function search($searchTerm){
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $searchTerm);
        $list = explode("_",$searchTerm);

        foreach($list as $searchTerm){
            $searchTerm = "%" . $searchTerm . "%";
            $query = "SELECT *  FROM user WHERE user_type = 'vendor' AND (f_name LIKE '$searchTerm' OR l_name LIKE '$searchTerm' )";
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