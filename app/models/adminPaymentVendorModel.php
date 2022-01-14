<?php

class AdminPaymentVendorModel extends database{
    public function getRequest(){
        $query = "SELECT vendor_request.*,wallet.withdrawable_amount,user.f_name,user.l_name FROM vendor_request,wallet,user WHERE vendor_request.user_id = wallet.user_id AND vendor_request.user_id = user.user_id ORDER BY vendor_request.request_id";
        $result = mysqli_query($GLOBALS['db'],$query);
        return $result;
    }



}