<?php
    class adminChatMsgModel extends database{
        // public function send($message,$sender,$reciever,$date,$time){
        //     $query = "INSERT INTO user_message values
        //     ('$reciever','$sender','$message','$date','$time')";
        //     mysqli_query($GLOBALS['db'],$query);
        // }

        // public function getChat($sender,$reciever){
        //     $chat = "SELECT * FROM user_message WHERE (sender='$sender' AND reciever='$reciever') OR (sender='$reciever' AND reciever='$sender')";
        //     $result = mysqli_query($GLOBALS['db'],$chat);
        //     return mysqli_fetch_all($result,MYSQLI_ASSOC);
        // }

        // public function getstatus($reciever){
        //     $chatStatus = "SELECT * FROM user_online WHERE userName='$reciever' LIMIT 1";
        //     $result = mysqli_query($GLOBALS['db'], $chatStatus);
        //     return mysqli_fetch_assoc($result);
        // }

        // public function getDetails($user){
        //     $userDetails = "SELECT * FROM user WHERE userName='$user' LIMIT 1";
        //     $result = mysqli_query($GLOBALS['db'],$userDetails);
        //     return mysqli_fetch_assoc($result);
        // }

        public function getName($id){
            $query = "SELECT f_name,l_name FROM user WHERE user_id='$id' LIMIT 1";
            $result = mysqli_query($GLOBALS['db'],$query);
            $user = mysqli_fetch_assoc($result);
            return $user;
        }

        public function getUserDetails($id){
            $query = "SELECT * FROM user WHERE user_id = '$id' LIMIT 1";
            $result = mysqli_query($GLOBALS['db'],$query);
            $user = mysqli_fetch_assoc($result);
            return $user;
        }

        public function getChat($user2){
            // $user1 = 12;
            // $user2 = 6;
            
            $user1 = $_SESSION['userId'];
            // $user2 = mysqli_real_escape_string($GLOBALS['db'],$_POST['incoming_id']);

            $output = "";
            $sql = "SELECT * FROM message LEFT JOIN user ON user.user_id = message.sender_id WHERE (reciever_id = {$user1} AND sender_id = {$user2}) OR (reciever_id = {$user2} AND sender_id = {$user1}) ORDER BY message_id";
            $query = mysqli_query($GLOBALS['db'],$sql);
            if(mysqli_num_rows($query)>0){
                while($row = mysqli_fetch_assoc($query)){
                    if($row['sender_id'] == $user1){
                        $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['message'] .'</p>
                                </div>
                                </div>';
                    }else{
                        if(!($row['profilePicture'])){
                            $row['profilePicture'] = "pp_default.png";
                        }
                        $output .= '<div class="chat incoming">
                                <img src="http://localhost/partyak/public/img/userImages/'.($row['profilePicture']).'" alt="">
                                <div class="details">
                                    <p>'. $row['message'] .'</p>
                                </div>
                                </div>';
                    }
                }
            }else{
                $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>'; 
            }return $output;
        }

        public function send($user,$message){

            $sender = $_SESSION['userId'];

            if(!empty($message)){
                $query = "INSERT INTO message (sender_id, reciever_id,message) 
                VALUES ('$sender', '$user', '$message')";

                mysqli_query($GLOBALS['db'], $query);
            }
        }

        

                    
                   


    }
            









?>