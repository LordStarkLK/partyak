<?php
class SpAnalyticModel extends Database
{
    

    public function getSettlementDetails($user_id){
        $query = "SELECT * FROM vendor_payment WHERE vendor_id = '$user_id' LIMIT 5 ";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getPaymentDetails($user_id){
        $query = "SELECT * FROM wallet WHERE user_id = '$user_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getMonthlyIncome($user_id){
        

        $query = " SELECT date_format(payment_date,'%M') AS month, sum(amount) AS sales FROM payment WHERE vendor_id='$user_id' GROUP BY month(payment_date) ORDER BY month(payment_date) ";
        
        $result = mysqli_query($GLOBALS['db'],$query);
        while($row=mysqli_fetch_array($result)){
            $monthName[] =$row['month'];
            $sales[] = $row['sales'];

        }
        return array($monthName,$sales);
        
    }

    
}



