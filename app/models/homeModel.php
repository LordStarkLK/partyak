<?php
class homeModel extends database {
    public function getMarketingContent(){
        $query = "SELECT * FROM `marketing_content` WHERE `upload_status`='online' || `upload_status`='Accepted'";
        $result = mysqli_query($GLOBALS['db'], $query);
        $marketResult = array();
        if ((mysqli_num_rows($result) > 0)) {
            $i = 0;
            while ($marketingResultArray = mysqli_fetch_assoc($result)) {
                $data['content'] = $marketingResultArray['content'];
                $marketResult[$i] = $data;
                $i++;
            }
            return $marketResult;
        } else {
            $marketResult = null;
            return $marketResult;
        }
    }
}