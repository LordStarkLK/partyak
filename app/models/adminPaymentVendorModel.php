<?php

class AdminPaymentVendorModel extends database{
    public function getRequest(){
        $query = "SELECT vendor_request.*,wallet.withdrawable_amount,user.f_name,user.l_name FROM vendor_request,wallet,user WHERE vendor_request.user_id = wallet.user_id AND vendor_request.user_id = user.user_id ORDER BY vendor_request.request_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }

    public function getPayments(){
        $query = "SELECT vendor_payment.*,user.f_name,user.l_name FROM
         vendor_payment,user WHERE
         vendor_payment.vendor_id = user.user_id ORDER BY vendor_payment.payment_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;

    }

    public function getWalletDetails(){
        $query = "SELECT wallet.amount,wallet.withdrawable_amount FROM
         vendor_payment,wallet WHERE
          vendor_payment.vendor_id = wallet.user_id ORDER BY vendor_payment.payment_id";

        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }

    public function insertSettlement($fileNameNew,$user_id,$amount,$description,$date,$type,$request_id)
    {
        // echo "Hi";
        // insert to vendor payment table
        $query = "INSERT INTO vendor_payment(date,amount,vendor_id,content,description,type,request_id) VALUES ('$date','$amount','$user_id','$fileNameNew','$description','$type','$request_id')";
        $result = mysqli_query($GLOBALS['db'], $query);
        if($result){
            if($type == "Requested Payment"){
                $query2 = "UPDATE vendor_request SET status = 'Paid' WHERE request_id = '$request_id'";
                $result2 = mysqli_query($GLOBALS['db'], $query2);
            }

            // wallet details checking
            $query3 = "SELECT * FROM wallet WHERE user_id = '$user_id'";
            $result3 = mysqli_query($GLOBALS['db'], $query3);
            $row = mysqli_fetch_assoc($result3);
            $amount1 = $amount/0.97;
            $amountPartyak = $amount1 - $amount;
            $amountMod = $row["amount"] - $amount1;
            $withdrawableMod = $amountMod * 0.97;
            $query4 = "UPDATE wallet SET amount = '$amountMod',withdrawable_amount = '$withdrawableMod' WHERE user_id = '$user_id'";
            $result4 = mysqli_query($GLOBALS['db'], $query4);
            $query5 = "SELECT * FROM wallet WHERE user_id = '12'";
            $result5 = mysqli_query($GLOBALS['db'], $query5);
            $row2 = mysqli_fetch_assoc($result5);
            $amountPartyak = $row2["amount"] + $amountPartyak;
            $query6 = "UPDATE wallet SET amount = '$amountPartyak', withdrawable_amount = '$amountPartyak' WHERE user_id = '12'";
            $result6 = mysqli_query($GLOBALS['db'], $query6);

            // Notification
            $query = "SELECT f_name,l_name from user WHERE user_id='$user_id'";
            $query = mysqli_query($GLOBALS['db'], $query);
            $result = mysqli_fetch_assoc($query);
            $fName = $result['f_name'];
            $lName = $result['l_name'];
           
        
            $description = "Admin have done a settlement of amonunt Rs.".number_format($amount,2,'.',',')."";
        
            $query = "INSERT INTO notifications(notification_type,heading,description,url,user_id,notification_status,date)
            VALUES ('new_settlment','New Settlent Done','$description','http://localhost/partyak/adminBookings','$user_id','0',NOW())";
            mysqli_query($GLOBALS['db'], $query);


        }

    }



}