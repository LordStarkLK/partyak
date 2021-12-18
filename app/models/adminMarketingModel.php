<?php
    class adminMarketingModel extends database{
        public function getMarketing(){
            $query = "SELECT * FROM marketing_content ORDER BY content_id DESC";
            $result = mysqli_query($GLOBALS['db'],$query);
            // if(mysqli_num_row)($result)>0){
            //     return $result;
            // }
            return $result;
        }

        public function getUser(){
            $query = "SELECT * FROM marketing_content,user WHERE
             user.user_id = marketing_content.user_id ORDER BY marketing_content.content_id DESC";
             $result = mysqli_query($GLOBALS['db'],$query);

             return $result;
        }
    }


?>