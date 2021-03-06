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
            // Change status to online
            $query = "UPDATE marketing_content SET upload_status = 'online' WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS['db'],$query);
            // should be the html to change the table row column to onlineed status
            $output = 'pending';
            if($result>0){
                $output = ' <i class="fas fa-circle online"></i> online';
            }

            // notification generation
            $query = "SELECT user_id from marketing_content WHERE content_id = '$content_id'";
            $query = mysqli_query($GLOBALS['db'],$query);
            $result = mysqli_fetch_assoc($query);
            $userId = $result['user_id'];
            
            $query = "INSERT INTO notifications(notification_type,heading,description,url,user_id,notification_status,date)
             VALUES('online_marketing','Online Advertisment','Your advertisment is made online in Partyak','','$userId','0',NOW())";
            mysqli_query($GLOBALS['db'], $query);
    
            return $output;
    
            
        }
    
    
        public function offlineStatus($content_id){
            // Change status to offline
            $query = "UPDATE marketing_content SET upload_status = 'offline' WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS['db'],$query);
            // should be the html to change the table row column to onlineed status
            $output = 'pending';
            if($result>0){
                $output = ' <i class="fas fa-circle offline"></i> offline';
            }

            // notification generation
            $query = "SELECT user_id from marketing_content WHERE content_id = '$content_id'";
            $query = mysqli_query($GLOBALS['db'],$query);
            $result = mysqli_fetch_assoc($query);
            $userId = $result['user_id'];
            
            $query = "INSERT INTO notifications(notification_type,heading,description,url,user_id,notification_status,date)
             VALUES('offline_marketing','Offline Advertisment','Your advertisment is made offline in Partyak','','$userId','0',NOW())";
            mysqli_query($GLOBALS['db'], $query);
    
    
            return $output;
    
            
        }

        public function acceptStatus($content_id){
            // Change status to accepted
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
            // Change status to rejected
            $query = "UPDATE marketing_content SET upload_status = 'Rejected' WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS['db'],$query);
            // should be the html to change the table row column to onlineed status
            $output = 'pending';
            if($result>0){
                $output = ' <i class="fas fa-circle Rejected"></i> Rejected';
            }
    
            return $output;
    
            
        }

        // delete the content
        public function delete($content_id){
            $query = "DELETE FROM marketing_content WHERE content_id = '$content_id'";
            $result = mysqli_query($GLOBALS["db"], $query);
            return $result;
     
        }
    

        
    
        
    }


?>