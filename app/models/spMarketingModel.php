<?php

class SpMarketingModel extends Database
{
    
    public function uploadMarketingContent( $id, $fileNameNew)
    {

        //Insert user data
        // $query = "INSERT INTO user(email, password, user_type) VALUES ('$email', '$password', 'vendor')";
        // mysqli_query($GLOBALS['db'], $query);

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE user_id='$id' LIMIT 1"));
        $userId = $result["user_id"];

        //Insert data to child tables of user - on_your_own_planning table
        // $query = "INSERT INTO package(user_id, service_name, package_name, description, valid_from, valid_to, per_unit_price, fixed_price) 
        // VALUES ('$userId', '$serviceName', '$packageName', '$packageDescription' , '$packageValidFrom', '$packageValidTo' , '$packageUnitprice', '$packageFixedprice')";
        $query = "INSERT INTO marketing_content(user_id, content) VALUES('$userId','$fileNameNew')";
        mysqli_query($GLOBALS['db'], $query);
    }


    public function getUploadedContentDetails($id)
    {
        $query ="SELECT content, upload_status, upload_date FROM marketing_content WHERE user_id='$id' ORDER BY content_id DESC";
        $result = mysqli_query($GLOBALS['db'], $query) ;
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }
    

}