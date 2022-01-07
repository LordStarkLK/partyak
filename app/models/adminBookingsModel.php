<?php
class AdminBookingsModel extends database {
    public function getBooking(){
        $query = "SELECT * from booking ORDER BY 'booking_id' DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    public function getCusName(){
        $query = "SELECT user.f_name,user.l_name FROM user,booking WHERE user.user_id = booking.customer_id ORDER BY booking.booking_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    public function getServiceName(){
        $query = "SELECT other_service.service_name FROM other_service,booking WHERE other_service.service_id = booking.service_id ORDER BY booking.booking_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result)>0){
            return $result;
        }

    }

    public function getPackageName(){
        $query = "SELECT package.package_name FROM package,booking WHERE package.package_id = booking.package_id ORDER BY booking.booking_id DESC";
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
            $query = "SELECT booking.*,other_service.service_name,user.f_name,user.l_name,package.package_name  FROM package,user,other_service,booking WHERE other_service.service_id = booking.service_id AND user.user_id = booking.customer_id AND package.package_id = booking.package_id AND (other_service.service_name LIKE '$searchTerm') ORDER BY booking.booking_id DESC";
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
                <th>Bookings Id</th>
                <th>Customer</th>
                <th>Service</th>
                <th>Package</th>
                <th>Status</th>
                <th>Date</th>
                <th>More actions</th>

            </tr>';
            while($row = mysqli_fetch_assoc($query)){
                $i = 1;
                $output .= '
                                <td>'.$row['booking_id'].'</td>
                                <td>' .$row['f_name'].' '.$row['l_name'].'</td>
                                <td>'.$row['service_name'].'</td>
                                <td>'.$row['package_name'].'</td>
                                <td>'.$row['status'].'</td>
                                <td>'.$row['event_date'].'</td>
                                <td>
                                <div class="btn-group">
                                    <button onclick=\'window.location="http://localhost/partyak/adminVendorBooking"\'>See in Vendor Bookings</button>
                                    <button >Delete</button>

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