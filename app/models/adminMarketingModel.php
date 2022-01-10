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

        public function onlineStatus($content_id){
            $query = "UPDATE marketing_content SET upload_status = 'online' WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS['db'],$query);
            // should be the html to change the table row column to onlineed status
            $output = 'pending';
            if($result>0){
                $output = ' <i class="fas fa-circle online"></i> online';
            }
    
            return $output;
    
            
        }
    
    
        public function offlineStatus($content_id){
            $query = "UPDATE marketing_content SET upload_status = 'offline' WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS['db'],$query);
            // should be the html to change the table row column to onlineed status
            $output = 'pending';
            if($result>0){
                $output = ' <i class="fas fa-circle offline"></i> offline';
            }
    
            return $output;
    
            
        }

        public function acceptStatus($content_id){
            $query = "UPDATE marketing_content SET upload_status = 'Accepted' WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS['db'],$query);
            // should be the html to change the table row column to onlineed status
            $output = 'pending';
            if($result>0){
                $output = ' <i class="fas fa-circle Accepted"></i> Accepted';
            }
    
            return $output;
    
            
        }

        public function rejectStatus($content_id){
            $query = "UPDATE marketing_content SET upload_status = 'Rejected' WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS['db'],$query);
            // should be the html to change the table row column to onlineed status
            $output = 'pending';
            if($result>0){
                $output = ' <i class="fas fa-circle Rejected"></i> Rejected';
            }
    
            return $output;
    
            
        }

        public function delete($content_id){
            $query = "DELETE FROM marketing_content WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS["db"], $query);
            return $result;
     
        }
    

        
    
        
    }


?>