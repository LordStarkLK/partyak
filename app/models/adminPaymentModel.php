<?php
class AdminPaymentModel extends database{
    public function getPayment(){
        $query = "SELECT * FROM booking,payment WHERE payment.booking_id = booking.booking_id ORDER BY payment_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }

    public function getcustomer(){
        $query = "SELECT user.f_name,user.l_name FROM user,payment WHERE user.user_id = payment.customer_id ORDER BY payment.payment_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }

    public function getPackage(){
        $query = "SELECT package.package_name,package.per_unit_price FROM package,booking,payment WHERE payment.booking_id = booking.booking_id AND booking.package_id = package.package_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }

    public function getService(){
        $query = "SELECT other_service.service_name FROM other_service,booking,payment WHERE payment.booking_id = booking.booking_id AND booking.service_id = other_service.service_id ORDER BY payment.payment_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
        
    }

    public function getMarketingpayment(){
        $query = "SELECT marketing_payment.*,marketing_content.upload_status,user.f_name,user.l_name FROM marketing_payment,marketing_content,user WHERE marketing_payment.content_id = marketing_content.content_id AND marketing_content.user_id = user.user_id ORDER BY marketing_payment.content_id DESC";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
        
    }

    public function search($searchTerm){
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $searchTerm);
        $list = explode("_",$searchTerm);

        foreach($list as $searchTerm){
            $searchTerm = "%" . $searchTerm . "%";
            $query = "SELECT payment.*,booking.*,
            user.f_name,user.l_name,package.package_name,
            package.per_unit_price,other_service.service_name 
            FROM payment,booking,user,package,other_service 
            WHERE payment.booking_id = booking.booking_id
             AND user.user_id = payment.customer_id 
             AND booking.package_id = package.package_id 
             AND booking.service_id = other_service.service_id 
             AND (user.f_name LIKE '$searchTerm' OR user.l_name LIKE '$searchTerm')";
            $query = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($query) > 0)
                {
                    break;
                }

        }
        $output = "";
        if(mysqli_num_rows($query)== 0){
            $output .= "No service reviews available as the search term";
        }
        if(mysqli_num_rows($query)>0){
            $output .='<table>
            <tr>
                <th>Payment Id</th>
                <th>Customer Name</th>
                <th>Service </th>
                <th>Package</th>
                <th>Details</th>
                <th>Date</th>
                <th>Payment Status</th>
                <th>Paid amount</th>
                <th>Full Payment</th>

            </tr>';
                    
            while($row = mysqli_fetch_assoc($query)){
                $total = $row['per_unit_price']*$row['noOfGuest'];
                $output .= '
                <td>'.$row['payment_id'].'</td>
                                <td>'.$row['f_name'].' '.$row['l_name'].'</td>
                                <td>'.$row['service_name'].'</td>
                                <td>'.$row['package_name'].'</td>
                                <td>'.$row['per_unit_price'].' ('.$row['package_name'].') x '.$row['noOfGuest'].' individuals</td>
                                <td>'.$row['payment_date'].'</td>
                                <td>'.$row['status'].'</td>
                                <td>Rs.'.number_format($row['amount'],2,'.',',').'</td>
                                <td>Rs.'.number_format($total,2,'.',',').'</td>

                                
                            </tr>';
              
            }
        }

        return $output;
    }



}